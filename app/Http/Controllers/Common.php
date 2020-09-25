<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\SsmlVoiceGender;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;

class Common extends Controller
{
    public function index()
    {
        return \View::make('index');
    }

    public function create($text)
    {
        if(strlen($text) <= 200){
            $exptext = explode(' ', $text);
            if(count($exptext) > 0){
                $imptext = implode('+', $exptext);
                $aa = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$imptext.'&tl=en-US');
            }else{
                $aa = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$text.'&tl=en-US');
            }
            $filename = time().'.mp3';
            $filepath = public_path('audio');
            file_put_contents($filepath.'/'.$filename, $aa);
        }else{
            $wordwrap = wordwrap($text, 200, '|', true);
            $exptext = explode('|', $wordwrap);
            $filepath = public_path('audio');
            $splitpath = public_path('audio/split');
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
                // $file .= $this->store($splitpath.'/'.$j.'.mp3');
                //file_put_contents($filepath.'/'.$filename, file_get_contents($splitpath.'/'.$j.'.mp3'), FILE_APPEND);
                // file_put_contents($filepath.'/'.$filename, file_get_contents($splitpath.'/0.mp3').file_get_contents($splitpath.'/1.mp3'));
                // echo $splitpath.'/'.$j.'.mp3';
                $file .= file_get_contents($splitpath.'/'.$j.'.mp3');
            }
            file_put_contents($filepath.'/'.$filename, $file);
            array_map('unlink', glob($splitpath."/*.mp3"));
        }
        return response()->json(['file' => $filename]);
        // echo $aa;
        // die();
        // $client = new TextToSpeechClient();
        // $synthesisInputText = (new SynthesisInput())
        //                             ->setText($text);
        // $voice = (new VoiceSelectionParams())
        //                 ->setLanguageCode('en-US')
        //                 ->setSsmlGender(SsmlVoiceGender::FEMALE);

        // $effectsProfileId = "telephony-class-application";
        // $audioConfig = (new AudioConfig())
        //                     ->setAudioEncoding(AudioEncoding::MP3)
        //                     ->setEffectsProfileId(array($effectsProfileId));
        // $response = $client->synthesizeSpeech($synthesisInputText, $voice, $audioConfig);
        // $audioContent = $response->getAudioContent();

        // $filepath = public_path('audio');
        // file_put_contents($filepath.'/'.'output.mp3', $audioContent);
        // return response()->json(['file' => 'output.mp3']);
        // $data = array(
        //     'input' => array(
        //         'text' => $text
        //     ),
        //     'voice' => array(
        //         'languageCode' => 'en-US',
        //         'name' => 'en-GB-Standard-A',
        //         'ssmlGender' => 'FEMALE'
        //     ),
        //     'audioConfig' => array(
        //         'audioEncoding' => 'MP3'
        //     )
        // );
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($ch, CURLOPT_URL, "https://texttospeech.googleapis.com/v1/text:synthesize");
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     'Authorization: Bearer ya29.a0AfH6SMAeOiW_U9Gnhb3UApunehwyvN2ziwNdWD7T7kiIjQdNIbILySP444Qrv8f8pa3RNZrAaPjCA7CxX9_ZzCipDoxn-ejjK20b4bakP9Ncpikw_34msNl2PNvuTddP3V2fMhyntR2U-g53ag2W5E3sd4ZTgDp8D7o',
        //     'Content-Type: application/json',
        //     'charset=utf-8',
        // ));
        // $result = curl_exec($ch);
        // echo '<pre>';
        // print_r($result);
        // die();
    }

    public function store($path)
    {
        return file_get_contents($path);
    }

    public function show()
    {
        return \View::make('welcome');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    //-- francescomalatesta/php-google-tts-example --//package for google-tts
}
