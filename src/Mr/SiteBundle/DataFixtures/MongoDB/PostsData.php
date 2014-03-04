<?php
/**
 * Created by IntelliJ IDEA.
 * User: hypermedia
 * Date: 04/03/14
 * Time: 14:08
 * To change this template use File | Settings | File Templates.
 */

namespace Mr\SiteBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mr\SiteBundle\Document\Post;
use Mr\SiteBundle\Document\Upload;

class PostsData implements FixtureInterface {
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->setTitle("Lorem ipsum");
        $post->setSummary("Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit");
        $post->setSection("blog");

        $post->setContent(<<<TXT
   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum, ligula eget mollis volutpat, risus diam malesuada lectus, sit amet laoreet velit quam sed urna. Sed odio ante, dapibus id luctus eu, ultrices in mi. Phasellus interdum lectus facilisis pulvinar interdum. Cras quis elit quis tortor blandit sodales a vel mauris. Phasellus commodo porta porta. Sed purus orci, vestibulum eget volutpat at, mattis a massa. Praesent nec condimentum diam. Quisque vitae justo quis dolor feugiat facilisis quis eu massa. Nam gravida vestibulum elit. Donec quis elit lacinia, varius mauris in, tempus diam. In semper pellentesque feugiat. Praesent a ornare massa. Donec libero est, faucibus eget placerat posuere, aliquet ac odio.

Nullam vitae est augue. Vivamus iaculis sem massa. Etiam nulla justo, iaculis ac erat vitae, pellentesque posuere sapien. Mauris accumsan eros quis enim condimentum faucibus. Nullam aliquet sem in magna viverra, ac volutpat ligula rutrum. Phasellus varius dolor nisl, a aliquam magna elementum et. Aliquam erat volutpat. Sed eget magna turpis. Nulla facilisi.

Suspendisse potenti. Sed interdum sed elit at mollis. Quisque a dignissim sapien. Aliquam faucibus hendrerit libero, at posuere risus vulputate ut. Pellentesque ut aliquet leo. Maecenas ornare ac nulla a rutrum. Vestibulum a fermentum diam. Phasellus vel lacus eget turpis tempor scelerisque in quis nisi. Nullam odio velit, hendrerit vitae bibendum in, tempor id urna. Nunc justo risus, accumsan non semper sit amet, fermentum eu erat. Curabitur nec vehicula sem, ut ornare augue.

Vivamus et ipsum vitae diam egestas adipiscing. Curabitur auctor turpis ipsum, vel cursus sem rhoncus vitae. Fusce vel justo sed nibh cursus tincidunt. Proin mauris odio, semper sit amet egestas ac, luctus quis tellus. Curabitur tellus nulla, aliquam a mauris eu, commodo imperdiet urna. Phasellus accumsan luctus velit, id vehicula quam egestas in. Mauris interdum varius augue in pretium. Aenean ultricies turpis ligula, sed dignissim libero tempus et. Proin euismod id dolor ut elementum. Donec odio odio, sagittis id sem non, mattis egestas ipsum. Donec a urna condimentum, consectetur urna et, fermentum nunc. Morbi aliquam cursus erat at posuere. Nullam accumsan quam nec sagittis rhoncus. Praesent ut consequat erat.

Phasellus consequat enim quis quam varius, id cursus lectus tincidunt. Nunc sem ligula, vulputate id porta eget, convallis quis eros. Maecenas sollicitudin lectus ut sapien tempus, ac iaculis lacus blandit. Nullam diam sapien, auctor in pulvinar vitae, blandit ac magna. Cras fringilla accumsan porttitor. Morbi eu bibendum tellus. Suspendisse potenti. Mauris vel porttitor neque. Nunc eu elit a massa eleifend hendrerit et semper nibh. Proin cursus laoreet aliquet. Proin nulla felis, porta eu velit vel, accumsan pellentesque urna. Nulla posuere orci vel interdum ultrices.
TXT
);

        $image = new Upload();
        $image->setFile("/home/hypermedia/Bureau/LOGO_CGT-Ina_A4.gif");
        $image->setFilename("LOGO_CGT-Ina_A4.gif");
        $image->setMimeType("image/gif");

        $manager->persist($image);
        $manager->flush();

        $post->setImage($image);

        $manager->persist($post);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}