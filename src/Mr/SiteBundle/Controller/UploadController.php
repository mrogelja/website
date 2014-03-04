<?php
/**
 * Created by IntelliJ IDEA.
 * User: hypermedia
 * Date: 04/03/14
 * Time: 14:45
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\StreamedResponse;


class UploadController extends Controller
{
    public function newAction(Request $request)
    {
        $form = $this->createFormBuilder(array())
            ->add('upload', 'file')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);

            $data = $form->getData();

            /** @var $upload \Symfony\Component\HttpFoundation\File\UploadedFile */
            $upload = $data['upload'];

            $document = new Upload();
            $document->setFile($upload->getPathname());
            $document->setFilename($upload->getClientOriginalName());
            $document->setMimeType($upload->getClientMimeType());

            $dm = $this->get('doctrine_mongodb');
            $dm->persist($document);
            $dm->flush();
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/ressource/{id}", name="ressource")
     */
    public function showAction($id)
    {
        $upload = $this->get('doctrine_mongodb')
            ->getRepository('MrSiteBundle:Upload')
            ->find($id);

        if (null === $upload) {
            throw $this->createNotFoundException(sprintf('Upload with id "%s" could not be found', $id));
        }

        $response = new StreamedResponse();
        $response->headers->set('Content-Type', $upload->getMimeType());

        $stream = $upload->getFile()->getMongoGridFSFile()->getResource();

        $response->setCallback(function () use ($stream) {
            fpassthru($stream);
        });

        return $response;
    }
}