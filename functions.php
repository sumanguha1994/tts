<?php
if(isset($_GET['textval'])){
    $text = $_GET['textval'];
    if(strlen($text) <= 200){
        $exptext = explode(' ', $text);
        if(count($exptext) > 0){
            $imptext = implode('+', $exptext);
            $aa = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$imptext.'&tl=en-US');
        }else{
            $aa = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$text.'&tl=en-US');
        }
        $filename = time().'.mp3';
        $filepath = './audio';
        file_put_contents($filepath.'/'.$filename, $aa);
    }else{
        $wordwrap = wordwrap($text, 200, '|', true);
        $exptext = explode('|', $wordwrap);
        $filepath = './audio';
        $splitpath = './audio/split';
        for($i = 0;$i < count($exptext);$i++)
        {
            $expExptext = explode(' ', $exptext[$i]);
            $imptext = implode('+', $expExptext);
            $aa = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$imptext.'&tl=en-US');
            file_put_contents($splitpath.'/'.$i.'.mp3', $aa);
        }
        $splitFolder = glob($splitpath.'/*.mp3');
        $filename = time().'.mp3';
        $file = '';
        for($j = 0;$j < count($splitFolder);$j++)
        {
            $file .= file_get_contents($splitpath.'/'.$j.'.mp3');
        }
        file_put_contents($filepath.'/'.$filename, $file);
        array_map('unlink', glob($splitpath."/*.mp3"));
    }
    echo json_encode(['file' => $filename]);
}
?>