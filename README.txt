Add the folling lines to your themes function file

include get_template_directory() . '/contentSlider/cpt.php';
include get_template_directory() . '/contentSlider/optionPage.php';
include get_template_directory() . '/contentSlider/enqueue.php';

The are 2 things that make this work including these files and downloading the Flex Slider files to your themes js folder

All other instructions are in the Content Slider folder in the wp-admin > settings > Content Slider

This will create a custom post type of the name you provide, provide code for a simle slider that works for Genesis child theme or other WordPress themes. 

**Images** there are a few navigational images in the contentSlider/Images folder