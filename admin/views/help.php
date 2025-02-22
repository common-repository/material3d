
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="m3d-admin-wrap">
    <h1 class="wp-heading-inline">Material3d Help & Support</h1>
    <div class="section">
        <div class="title">Shortcode</div>
        <div class="content">
            <p>The shortcode [m3dscene] must have a "name" attribute at least, which is the name of a scene. Other attributes see below.</p>
            <table  class="help-list">
                <thead>
                    <tr>
                        <th>Attribute</th>
                        <th>Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>The name of the scene</td>
                    </tr>
                    <tr>
                        <td>width</td>
                        <td>integer</td>
                        <td>The width of the scene, in pixel</td>
                    </tr>
                    <tr>
                        <td>height</td>
                        <td>integer</td>
                        <td>The height of the scene, in pixel</td>
                    </tr>
                    <tr>
                        <td>background</td>
                        <td>integer/string</td>
                        <td>The background of the scene. It could be a integer which represents a color,
                            or a string which is the name of a texture defined in the scene.
                            For example: [... background="0xff0000"] - the background will be set to red color.
                            If it's set to an empty string, the background will be removed.
                            (See <a href="<?=M3D_NET_HOME?>document-dev-2-0.html">this</a> for detail)
                        </td>
                    </tr>
                    <tr>
                        <td>environment</td>
                        <td>string</td>
                        <td>The environment map of the scene. It is the name of a cube texture defined in the scene.
                            If it's set to an empty string, the environment map will be removed.
                            (See <a href="<?=M3D_NET_HOME?>document-dev-2-0.html">this</a> for detail)
                        </td>
                    </tr>
                    <tr>
                        <td>camera</td>
                        <td>string</td>
                        <td>The camera of the scene. It is the name of a camera object defined in the scene.
                            If it's set to an empty string, the camera will be set to the deault.
                            (See <a href="<?=M3D_NET_HOME?>document-dev-2-0.html">this</a> for detail)
                        </td>
                    </tr>
                    <tr>
                        <td>fog</td>
                        <td>string</td>
                        <td>The fog of the scene. It is a string of three parameters separated with ",", which are color, near and far ranges.
                            For example: [... fog="0xff0000, 1.0, 30.0"] - the fog color is red, within the range between 1.0 and 30.0.
                            If it's set to an empty string, the fog will be removed.
                            (See <a href="<?=M3D_NET_HOME?>document-dev-2-0.html">this</a> for detail)
                        </td>
                    </tr>
                    <tr>
                        <td>VRSupport</td>
                        <td>boolean</td>
                        <td>The VR (virtual reality) device support of the scene.
                            For example: [... VRSupport=true] - a VR button will show on the scene for visitors to switch to VR mode.
                            (See <a href="<?=M3D_NET_HOME?>document-dev-2-0.html">this</a> for detail)
                        </td>
                    </tr>
                    <tr>
                        <td>onPlay</td>
                        <td>string</td>
                        <td>A function name defined in javascripts.
                            It takes only one argument which is a scene object returned by Material3dPlayer.play for users to do initialization work.
                            For example: [... onPlay="init"] - a function named "init" will be called with an argument of the scene object when it is just created.
                            (See <a href="<?=M3D_NET_HOME?>document-dev-2-0.html">this</a> for detail)
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="section">
        <div class="title">Material3d Editor</div>
        <div class="content">
            <p>Material3d Editor is a single page app based on React.js and three.js, providing a visualized and WYSIWYG way to construct 3d scenes with objects, lights, cameras, textures, materials, animations, force fields and user interactions (mouse click, screen touch, and so on).</p>
            <p>See <a href="<?=M3D_NET_HOME?>forum.php?type=single&id=1">First Tutorial</a> to learn.</p>
            <p>See <a href="<?=M3D_NET_HOME?>document-user-0.html">Documentation</a> for detail.</p>
            <p>Click <img width="25" height="25" src="<?=M3DWP_URL.'imgs/settings.svg'?>" alt="settings"> to open <b>Settings Panel</b> at the top of the <a href="<?=menu_page_url('m3d-editor.php', false)?>">Editor page</a>.</p>
            <p>The <b>Libraries</b> settings configure the libraries used by the editor.<br>
                &nbsp;- The "Root URL" could be "Local", "Material3d.net" or "Other",
                which means the root url is set to the local website, the home site of Material3d.net, or other location respectively.<br>
                &nbsp;- The "Object3d Libraries" is a string of json format, which is an object with a few properties.
                Each property represents an object3d library imported by the editor, like "mesh": "libs/meshlib.js", which is a "mesh" library located at Root URL plus "libs/meshlib.js".<br>
                &nbsp;- Other settings define texture, material, forcefield and animation libraries imported by the editor, which are located at Root URL plus the setting value (like "libs/texturelib.js").
            </p>
            <p>The <b>Files</b> settings configure the scene file upload and download url.<br>
                &nbsp;- The "Upload URL" could be "Local", or "Other",
                which means the storage place of scene files is set to the local website, or other location.<br>
                &nbsp;- The "Download URL" could be "Local", "Gallery", or "Other",
                which means the loading source of scene files is the local website, the gallery on Material3d.net, or other location respectively.
            </p>
            <p>See <a href="<?=M3D_NET_HOME?>document-dev-1-1.html">"config.js"</a> for detail.</p>
        </div>
    </div>
    <div class="section">
        <div class="title">Support</div>
        <div class="content">
            <p>Submit a question or send email to <a href="mailto:support@material3d.net">support@material3d.net</a> for support.</p>
            <form action="<?=M3D_NET_HOME?>forum.php?type=post" method="post" class="support-form">
                <input type="hidden" name="source" value="<?=$_SERVER['SERVER_NAME']?>">
                <input type="text" name="title" placeholder="Title">
                <textarea name="content" cols="100" rows="10"></textarea>
                <div><button type="submit" class="button-primary">Submit</button></div>
            </form>
            <p>Find <a href="<?=M3D_NET_HOME?>forum.php">Questions and Answers</a> on material3d.net forum.</p>
        </div>
    </div>
</div>