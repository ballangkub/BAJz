<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>ตัดคำภาษาไทยโดย PHP - THSplitLib</title>
    </head>
    <body>
    <style type="text/css">
        body{
            font-size:13px;
        }
    </style>
    <div style="float:left; width:400px;">
        <form method="post" >
            <b>กรุณาใส่ประโยคที่ต้องการทดสอบได้ที่นี่ครับ: </b><br/>
            <textarea name="text_to_segment" cols="40" rows="50" style="width:340px;height:500px;"><?php echo isset($_POST['text_to_segment'])?  trim($_POST['text_to_segment']):'' ?></textarea>
            <br/>
            <input type="submit" value="กดที่นี่เพื่อตัดคำ" style="width:347px;height:40px;font-size:18px;background: #eee" />
        </form>
    </div>
    
    <div style="clear:both"></div>
    <div style="width:800px;">
    <?session_start();?>
        <?php

        if ($_POST) {
            $time_start = microtime(true);
            $text_to_segment = $_POST['text_to_segment'];
            echo '<hr/>';
            echo $text_to_segment;
            //echo '<b>ประโยคที่ต้องการตัดคือ: </b>' . $text_to_segment . '<br/>';
            include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
            $segment = new Segment();
            //echo '<hr/>';
            $result = $segment->get_segment_array($text_to_segment);
            echo implode(',', $result);
            echo "<br>";
            $test = implode(',',$result);
            $_SESSION["test1"] = $test;
            echo $_SESSION["test1"];
            echo "<br>";
            
            $text_to_segment = trim($_POST['text_to_segment']);
            echo '<hr/>';
            //echo '<b>ประโยคที่ต้องการตัดคือ: </b>' . $text_to_segment . '<br/>';
            include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment1.php');
            $segment = new Segment1();
            //echo '<hr/>';
            $result1 = $segment->get_segment_array($text_to_segment);
            echo implode(',', $result1);
            echo "<br>";
            $testdic1 = implode(',',$result1);
            $_SESSION["test2"] = $testdic1;
            echo $_SESSION["test2"];

            $txtfull = $_POST['text_to_segment'];
            $_SESSION["txtfull"]=$txtfull;
            
           /* $testexp = explode(",",$testdic1);
             $testexp[0];
             $testexp[1];
                if ($testexp[1] == "และ"){
                    echo "TEST"; 
                }else {
                    echo "ERROR";
                }
            */
            

          /*  function convert($size) {
                $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
                return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
            }
            $time_end = microtime(true);
            $time = $time_end - $time_start;
            echo '<br/><b>ประมวลผลใน: </b> '.round($time,4).' วินาที';
            echo '<br/><b>รับประทานหน่วยความจำไป:</b> ' . convert(memory_get_usage());
            echo '<br/><b>คำที่อาจจะตัดผิด:</b> ';
            foreach($result as $row)
            {
                if (mb_strlen($row) > 12)
                {
                    echo $row.'<br/>';
                }
            }*/
        }

        ?>

    </div>
</body>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28746062-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</html>
