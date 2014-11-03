<?php
add_action( 'admin_menu', 'rlp_add_admin_menu' );
add_action( 'admin_init', 'rlp_settings_init' );


function rlp_add_admin_menu(  ) { 

    add_submenu_page( 'options-general.php', 'contentSlider', 'Content Slider', 'manage_options', 'contentslider', 'contentslider_options_page' );

}


function rlp_settings_exist(  ) { 

    if( false == get_option( 'contentslider_settings' ) ) { 

        add_option( 'contentslider_settings' );

    }

}


function rlp_settings_init(  ) { 

    register_setting( 'pluginPage', 'rlp_settings' );

    add_settings_section(
        'rlp_pluginPage_section', 
        __( 'This field allows you to add a name for your custom post type that will be used in  a slider', 'wordpress' ), 
        'rlp_settings_section_callback', 
        'pluginPage'
    );

    add_settings_field( 
        'rlp_text_field_0', 
        __( 'Name', 'wordpress' ), 
        'rlp_text_field_0_render', 
        'pluginPage', 
        'rlp_pluginPage_section' 
    );


}


function rlp_text_field_0_render(  ) { 

    $var = $options['rlp_text_field_0'];
    if( $var)

    $options = get_option( 'rlp_settings' );
    ?>
    <input type='text' name='rlp_settings[rlp_text_field_0]' value='<?php echo $options['rlp_text_field_0']; ?>' required>
    <?php

}


function rlp_settings_section_callback(  ) { 

    echo __( 'Below enter a name for the CPT', 'wordpress' );

}


function contentslider_options_page(  ) { 

    ?>
    <form action='options.php' method='post'>
        
        <h2>Content Slider</h2>
        
        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>
        
    </form>
    make sure that flex slider is installed
    enqueue the slider's jquery

    <p>Add tne following files to your functions.php file</p>

    <p>
    include get_template_directory() . '/contentSlider/cpt.php';<br />
    include get_template_directory() . '/contentSlider/optionPage.php';<br />
    include get_template_directory() . '/contentSlider/enqueue.php';
    </p>

    <p>

 <!--    
 &#47; = / 
 &lt;  = <
 &gt;  = >
 -->

    <p>Add the following code to the page want the slider on</p>
   
    <?php 

    echo '
        &lt;!---Front page slider--&gt;<br />
        &lt;div class="flexslider"&gt;<br />
            &lt;ul class="slides"&gt;<br />
                &lt;?php<br />
                query_posts( array(<br />
                    "post_type" => "your post type", <br />
                    ));<br />
                ?><br />
                &lt;?php if(have_posts()) : while(have_posts()) : the_post(); ?&gt;<br />
                &lt;i>&lt;?php the_content(); the_title(); ?>&lt;/li&gt;<br />
                &lt;?php endwhile; endif; ?&gt;<br />
                &lt;?php wp_reset_query(); ?&gt;<br />
            &lt;/ul&gt;<br />
        &gt;/div&gt;<br />
        &gt;!-- end slider --&gt;
        ';
    ?>
       </p>
       <p>Add the Slider JQuery to your js file in your WordPress theme folder</p>
       wp-content\themes\*your theme*\contnentSlider is where the folder should be located.</p>
       <p><a href="https://github.com/woothemes/FlexSlider/zipball/master" class="button button-primary" value="Download Flex Slider">Download Flex Slider</a></p>
       or
       <p><a href="http://flexslider.woothemes.com/" target="_blank">Visit the Woo Themes Flex Slider page</a></p>
       <p>make a check list for trouble shooting</p>

  <?php 
}


?>
