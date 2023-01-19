
<style>
  @font-face {
    src: url(fonts/Faruma.otf);
    font-family: faruma;
  }
  .form-wrapper{
    margin: 0 auto;
    width: 36%;
    padding: 20px;
    margin-top: 20px;
    background: #fff;
    box-shadow: 0 3px rgba(140,152,164,0.3);
  }
.input-wrapper{
  flex-wrap: 20;
  margin-bottom: 20px;
  font-family: faruma;
}
.input-wrapper label{
  flex-wrap: 20;
  font-family: faruma;
}
.result-wraper{
  font-family: faruma;
  font-size: 20px;
  font-weight: bold;
  padding: 10px;
  background: #609460;
  color: #fff;
}



body{
  background: #eee;
}

h1.center{
  text-align: center;
  font-family: faruma;
}
body {
            text-align: center;
            font-family: faruma;
        }
         
        #container {
            display: none;
            background-color: purple;
            color: white;
            position: absolute;
            width: 390px;
            border-radius: 5px;
            left: 50%;
            margin-left: -195px;
            padding: 8px 8px 8px;
            box-sizing: border-box;
        }
         
        #container button {
            font-family: faruma;
            background-color: yellow;
            display: inline-block;
            border-radius: 5px;
            border: 2px solid gray;
            padding: 5px;
            text-align: center;
            width: 60px;
        }
         
        #container .message {
            text-align: center;
            padding: 10px 30px;
            font-family: faruma;
        }
</style>

<?php
function getAge($dob){
  $bday = new DateTime($dob);
  $today = new DateTime(date('m.d.y'));
  if($bday>$today){
    return 'ތީ އަދި އުފަން ނުވާ ކުއްޖެއްގެ ތާރީޙް';
  }
  $diff =$today->diff($bday);
   return  ' މިހާރު ތިބޭފުޅާގެ އުމުރަކީ : '.$diff->y.' އަހަރާއި، '.$diff->m.' މަހާއި، '.$diff->d.' ދުވަސް';
}
?>

<h1 class="center">ޕީ.އެޗް.ޕީ އިން އުމުރު ހިސާބު ކުރުން</h1>
<hr>
<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
    <input class="input-wrapper" type="submit" value="އުމުރު ބަލާލުމަށް ފިތާލައްވާ">
      <input type="date" name="dob" >
      <label>އުފަން ތާރީޙް</label>
    </div>
  </form>

  <?php if(isset($_GET['dob']) && $_GET['dob']!=''){?>
    <div class="result-wraper">
      <?php echo getAge($_GET['dob']);?>
    </div>
  <?php } ?>
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script>
        function geeks(msg, gfg) {
            var confirmBox = $("#container");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function()
            {
            confirmBox.hide();
            });
            confirmBox.find(".yes").click(gfg);
            confirmBox.show();
        }
    </script>
</head>
<body>
  <div>
    <h3>ވަގުތަކީ އިންސާނާގެ އުމުރު ކަމުން، އެއިން ދުވަހެއް ހިނގައްޖެނަމަ އުމުރުން ދުވަހެއްދަނީއެވެ. އަދި އެކަމަށް ވިސްނައި ތިމާގެ ހެޔޮ އުމުރުގެ މަންފާ ތިމާއަށް ލިބޭނެފަދައަކުން މަސައްކަތްކުރާ މީހަކަށް ވާންޖެހޭނެވެ <br> ތިމާގެ އުމުރުގައި ބަރަކާތް ލައްވާށި</h3>
    <div id="container">
        <div class="message"> އުމުރު ބެއްލެވުމަށް އަޅުގަނޑު ހިޔާރު ކުރެއްވީތީ ޝުކުރިއްޔާ <br> ބާއްޖަވެރި ދުވަހަކަށް އެދެން
            </div>
        <button class="yes" >ޝުކުރިއްޔާ</button>
    </div>
    <input class="input-wrapper" type="button" value="އާމީން" onclick="geeks();" />
  </div>
</body>

