<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>ตัดคำภาษาไทยโดย PHP</title>
    </head>
    <body>
    <style type="text/css">
        body{
            font-size:14px;
        }
    </style>
    <div style="float:left; width:400px;">
        <form method="post">
            <b>กรุณาใส่ประโยค: </b><br/>
            <textarea name="text_to_segment" cols="40" rows="50" style="width:500px;height:400px;"><?php echo isset($_POST['text_to_segment'])?  trim($_POST['text_to_segment']):'' ?></textarea>
            <br/>
            <input type="submit" value="กดที่นี่เพื่อตัดคำ" style="width:347px;height:40px;font-size:18px;background: #eee"/>
        </form>
    </div>
    
        <br/>
        
        <br/>
        
    </div>
    <div style="clear:both"></div>
    <div style="width:800px;">
        <?php
        if ($_POST) {
            
            $time_start = microtime(true);
            
            $text_to_segment = trim($_POST['text_to_segment']);
            echo '<hr/>';

            include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
            $segment = new Segment();

            $result = $segment->get_segment_array($text_to_segment);
            echo implode('   ', $result);

            function convert($size) {
                $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
                return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
            }						
        }
        ?>

    </div>
</body>
</html>
