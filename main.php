<?php
  $root = '';
  $path = 'resources/'

  function getImagesFromDir($path) {
      $images = array();
      if ( $img_dir = @opendir($path) ) {
          while ( false !== ($img_file = readdir($img_dir)) ) {
              // checks for gif, jpg, png
              if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                  $images[] = $img_file;
              }
          }
          closedir($img_dir);
      }
      return $images;
  }

  function getRandomFromArray($ar) {
      mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
      $num = array_rand($ar);
      return $ar[$num];
  }

  $imgList = getImagesFromDir($root . $path);

  $img = getRandomFromArray($imgList);
?>


<html>
  <head>
    <title>Binghamton University Glee Club</title>

    <style type="text/css">
    body
    {
      background-color: #006747;
    }

    .header
     {
       border-collapse: collapse;
       width: 100%;
       background-color: white;
     }
    .header-top
      {
        border: 1px solid black;
        margin-bottom: 0;
        padding-bottom: 0;
        background-color: #002100;
        color: #006747;
      }
    .header-top td
      {
        border: 1px solid black;
        font-size: 2.5em;
        align: center;
      }
    .header-options
    {
      border: 1px solid black;
      border-top: 0;
      margin-top: 0;
      padding-top: 0;
    }
    .header-options td
    {
      border: 1px solid black;
      border-top: 0;
      font-size: 1.25em
    }
    #highlighted
    {
      text-align: center;
      background-color: #002100;
      color: #006747;
    }
    #notHighlighted
    {
      text-align: center;
    }

    img
    {
      border:1px solid #;
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      border-radius: 20px;
      float: center;
    }

    #testImage
    {
      position: absolute;
      margin: auto;
      top: 0;
      left: 0;
      right: 0;
      bottom: 200px;
      height: 500px;
    }

    </style>
  </head>

  <body>
    <!-- Beginning of top table -->
    <div id="headerDiv">

      <table class="header header-top">
        <tr>
          <td align="center"> Binghamton University Glee Club </td>
        </tr>
      </table>

      <table class = "header header-options">
        <tr>
          <td width="20%" id="highlighted">Home</td>
          <td width="20%" id="notHighlighted">Members</td>
          <td width="20%" id="notHighlighted">News</td>
          <td width="20%" id="notHighlighted">Repertoire</td>
          <td width="20%" id="notHighlighted">Contact Us</td>
        </tr>
      </table>

    </div>
    <div id="photosDiv">

  <!--    <img id="testImage" src="resources/testImage2.jpg"> -->

    <img id="testImage" src="<?php echo $path . $img ?>" alt="" />

    </div>
    <!-- Ending of top table -->
  </body>
</html>
