<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        <!-- Sweet Alert -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
        <div class="container" id="fcontainer">
            <h3>Hi There I am LISA.</h3>
            <h3>Locomotive's Interactive Smart Assistance</h3>
        </div>
        <div class="container" id="scontainer">
            <h3>What can I do for you on this</h3>
            <h3>cloudy afternoon in Montreal?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="startaproject" class="btn btn-warning">Start a project</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="joinateam" class="btn btn-warning">Join a team</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="applyanintern" class="btn btn-warning">Apply for an intership</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="dropaquickword" class="btn btn-warning">Drop a quick word</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="aboutlocomotive" class="btn btn-warning">About locomotive</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forstartaproject">
            <h3>My horoscope said two things: avoid salmon and</h3>
            <h3>that you’d come. However, the stars didn’t tell us</h3>
            <h3>about your project. Can you?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="completewebsite" class="btn btn-warning">Complete Website</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="webdesign" class="btn btn-warning">UX & Web Design</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="branding" class="btn btn-warning">Branding</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="brandingweb" class="btn btn-warning">Branding & Web</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="degitalcamaign" class="btn btn-warning">Degital Campaign</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="contriner" id="forjoinateam">
            <h3>There is no “I” in “team”, but we might be looking for</h3>
            <h3>“U”. What position catches your eye?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="backenddeveloper" class="btn btn-warning">Back-End Developer</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="frontenddeveloper" class="btn btn-warning">Front-End Developer</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectmanager" class="btn btn-warning">Project Manager</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="interactivedesigner" class="btn btn-warning">Interactive Designer</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="artdirector" class="btn btn-warning">Art Director</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forapplyanintern">
            <h3>How did you learn about Locomotive?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="fordropaquickword">
            <h3>We’re not in the history books *yet*, so how’d you</h3>
            <h3>learn about us?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- start project -->
        <div class="container" id="forcompletewebsite">
            <h3>You can’t put a price on happiness — oh wait,</h3>
            <h3>yes we can! What’s your budget range for this</h3>
            <h3>Complete Website project?</h3> 
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="30to50" class="btn btn-warning">30-50k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="50to75" class="btn btn-warning">50-75k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="75to100" class="btn btn-warning">75-100k</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="100up" class="btn btn-warning">100k+</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="1mildoloars" class="btn btn-warning">1 million dollars</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forwebdesign">
            <h3>You can’t put a price on happiness — oh wait, yes</h3>
            <h3>we can! What’s your budget range for this UX & Web</h3>  
            <h3>Design project?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="15to30" class="btn btn-warning">15-30k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="30to50" class="btn btn-warning">30-50k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="50to75" class="btn btn-warning">50-75k</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="75up" class="btn btn-warning">75k+</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="1mildoloars" class="btn btn-warning">1 million dollars</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forbranding">
            <h3>What is your budget range for this Branding</h3> 
            <h3>project?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="10to15" class="btn btn-warning">10-15k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="15to30" class="btn btn-warning">15-30k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="30to50" class="btn btn-warning">30-50k</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="50up" class="btn btn-warning">50k+</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="1mildoloars" class="btn btn-warning">1 million dollars</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forbrandingweb">
            <h3>They say the best things in life are free. They lied. </h3>
            <h3>What’s your budget range for this Branding & Web project?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="30to50" class="btn btn-warning">30-50k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="50to75" class="btn btn-warning">50-75k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="75to100" class="btn btn-warning">75-100k</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="100up" class="btn btn-warning">100k+</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="1mildoloars" class="btn btn-warning">1 million dollars</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="fordegitalcamaign">
            <h3>So you would like to work with one of the best</h3>
            <h3>teams in the world? What kind of project would you</h3>
            <h3>like us to craft for you?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="30to50" class="btn btn-warning">30-50k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="50to75" class="btn btn-warning">50-75k</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="75to100" class="btn btn-warning">75-100k</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="100up" class="btn btn-warning">100k+</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="1mildoloars" class="btn btn-warning">1 million dollars</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- start project -->
        <!-- join team -->
        <div class="container" id="forbackenddeveloper">
            <h3>Who’s been spilling the beans about Locomotive?</h3>
            <h3>How did you learn about Locomotive?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forfrontenddeveloper">
            <h3>Word on the street is… well, we’re the word on the</h3>
            <h3>street! So where’d you hear about Locomotive?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forprojectmanager">
            <h3>We’re not in the history books *yet*, so how’d you</h3>
            <h3>learn about us?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forinteractivedesigner">
            <h3>So who can I give props to for telling you about</h3>
            <h3>Locomotive?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="forartdirector">
            <h3>We’re not in the history books *yet*, so how’d you</h3>
            <h3>learn about us?</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="awardwebsite" class="btn btn-warning">Awards Websites</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="projectwedid" class="btn btn-warning">A project we did</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="anartical" class="btn btn-warning">An artical</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-4">
                        <button type="button" id="afriend" class="btn btn-warning">A friend</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" id="wordonstreet" class="btn btn-warning">Word on the street</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- join team -->
        <!-- award website -->
        <div class="container" id="forawardwebsite">
            <h3>I can already tell I’m going to like you. Tell me more</h3>
            <h3>about yourself.</h3>
            <form action="" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-cpntrol">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Telephone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-cpntrol">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Resume</label>
                            <input type="file" name="resume" id="resume" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Job</label>
                            <select name="job" id="job" class="form-control">
                                <option value="Back-end developer">Back-End Developer</option>
                                <option value="fornt-end developer">Fornt-End Developer</option>
                                <option value="project-manager">Project Manager</option>
                                <option value="Interactive Designer">Interactive Designer</option>
                                <option value="Art Director">Art Director</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- award website -->
        <div class="row">
            <div class="col-md-6 fspeech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601017618.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 sspeech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601033983.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forstartaproject_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601034710.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forjoinateam_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601035942.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forapplyanintern_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601036487.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 fordropaquickword_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601036923.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forcompletewebsite_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601037402.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forwebdesign_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601038072.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forbranding_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601038420.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forbrandingweb_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601040061.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 fordegitalcamaign_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601040459.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forbackenddeveloper_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601041100.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forfrontenddeveloper_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601041344.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forprojectmanager_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601041978.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forinteractivedesigner_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601042314.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forartdirector_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601041978.mp3" type='audio/mp3'>
                </audio>
            </div>
            <div class="col-md-6 forawardwebsite_speech">
                <audio controls id="autoaudio" autoplay="true" >
                    <source src="http://localhost/tts/audio/1601043179.mp3" type='audio/mp3'>
                </audio>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $('#scontainer').hide();
            $('.sspeech').hide();
            $('#forstartaproject').hide();
            $('.forstartaproject_speech').hide();
            $('#forjoinateam').hide();
            $('.forjoinateam_speech').hide();
            $('#forapplyanintern').hide();
            $('.forapplyanintern_speech').hide();
            $('#fordropaquickword').hide();
            $('.fordropaquickword_speech').hide();
            $('#forcompletewebsite').hide();
            $('.forcompletewebsite_speech').hide();
            $('#forwebdesign').hide();
            $('.forwebdesign_speech').hide();
            $('#forbranding').hide();
            $('.forbranding_speech').hide();
            $('#forbrandingweb').hide();
            $('.forbrandingweb_speech').hide();
            $('#fordegitalcamaign').hide();
            $('.fordegitalcamaign_speech').hide();
            $('#forbackenddeveloper').hide();
            $('.forbackenddeveloper_speech').hide();
            $('#forfrontenddeveloper').hide();
            $('.forfrontenddeveloper_speech').hide();
            $('#forprojectmanager').hide();
            $('.forprojectmanager_speech').hide();
            $('#forinteractivedesigner').hide();
            $('.forinteractivedesigner_speech').hide();
            $('#forartdirector').hide();
            $('.forartdirector_speech').hide();
            $('#forawardwebsite').hide();
            $('.forawardwebsite_speech').hide();
            setTimeout(() => {
                $('#fcontainer').hide();
                $('.fspeech').hide();
                $('#scontainer').show();
                $('.sspeech').show();
                $('#forstartaproject').hide();
                $('.forstartaproject_speech').hide();
                $('#forjoinateam').hide();
                $('.forjoinateam_speech').hide();
                $('#forapplyanintern').hide();
                $('.forapplyanintern_speech').hide();
                $('#fordropaquickword').hide();
                $('.fordropaquickword_speech').hide();
                $('#forcompletewebsite').hide();
                $('.forcompletewebsite_speech').hide();
                $('#forwebdesign').hide();
                $('.forwebdesign_speech').hide();
                $('#forbranding').hide();
                $('.forbranding_speech').hide();
                $('#forbrandingweb').hide();
                $('.forbrandingweb_speech').hide();
                $('#fordegitalcamaign').hide();
                $('.fordegitalcamaign_speech').hide();
                $('#forbackenddeveloper').hide();
                $('.forbackenddeveloper_speech').hide();
                $('#forfrontenddeveloper').hide();
                $('.forfrontenddeveloper_speech').hide();
                $('#forprojectmanager').hide();
                $('.forprojectmanager_speech').hide();
                $('#forinteractivedesigner').hide();
                $('.forinteractivedesigner_speech').hide();
                $('#forartdirector').hide();
                $('.forartdirector_speech').hide();
                $('#forawardwebsite').hide();
                $('.forawardwebsite_speech').hide();
            }, 6000);
            $('#startaproject').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forstartaproject').show();
                $('.forstartaproject_speech').show();
            });
            $('#joinateam').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forjoinateam').show();
                $('.forjoinateam_speech').show();
            });
            $('#applyanintern').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forapplyanintern').show();
                $('.forapplyanintern_speech').show();
            });
            $('#dropaquickword').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#fordropaquickword').show();
                $('.fordropaquickword_speech').show();
            });
            $('#completewebsite').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forcompletewebsite').show();
                $('.forcompletewebsite_speech').show();
            });
            $('#webdesign').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forwebdesign').show();
                $('.forwebdesign_speech').show();
            });
            $('#branding').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forbranding').show();
                $('.forbranding_speech').show();
            });
            $('#brandingweb').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forbrandingweb').show();
                $('.forbrandingweb_speech').show();
            });
            $('#degitalcamaign').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#fordegitalcamaign').show();
                $('.fordegitalcamaign_speech').show();
            }); 
            $('#backenddeveloper').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forbackenddeveloper').show();
                $('.forbackenddeveloper_speech').show();
            });
            $('#frontenddeveloper').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forfrontenddeveloper').show();
                $('.forfrontenddeveloper_speech').show();
            });
            $('#projectmanager').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forprojectmanager').show();
                $('.forprojectmanager_speech').show();
            });
            $('#interactivedesigner').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forinteractivedesigner').show();
                $('.forinteractivedesigner_speech').show();
            });
            $('#artdirector').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forartdirector').show();
                $('.forartdirector_speech').show();
            });
            $('#awardwebsite').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forawardwebsite').show();
                $('.forawardwebsite_speech').show();
            });
        });
    </script>
</html>
