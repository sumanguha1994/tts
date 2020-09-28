<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        <!-- Sweet Alert -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }
        body {
            display: table;
        }
        .mm {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
    </style>
    <body>
        <div class="container mm" id="fcontainer">
            <h3>Hi There I am LISA.</h3>
            <h3>Locomotive's Interactive Smart Assistance</h3>
        </div>
        <div class="container mm" id="scontainer">
            <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>What can I do for you on this</h3>
                <h3>cloudy afternoon in Montreal?</h3>
                <div class="row">
                    <div class="col-md-4"><button type="button" id="startaproject" class="mb-2 btn btn-block btn-warning">Start a project</button></div>
                    <div class="col-md-4"><button type="button" id="joinateam" class="mb-2 btn btn-block btn-warning">Join a team</button></div>
                    <div class="col-md-4"><button type="button" id="applyanintern" class="mb-2 btn btn-block btn-warning">Apply for an intership</button></div>
                    <div class="col-md-4 offset-md-2"><button type="button" id="dropaquickword" class="btn btn-block btn-warning">Drop a quick word</button></div>
                    <div class="col-md-4"> <button type="button" id="aboutlocomotive" class="btn btn-block btn-warning">About locomotive</button></div>
                </div>
            </div>
            </div>
        </div>
        <!-- for start a project -->
        <div class="container mm" id="forstartaproject">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>My horoscope said two things: avoid salmon and</h3>
                    <h3>that you’d come. However, the stars didn’t tell us</h3>
                    <h3>about your project. Can you?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="completewebsite" class="mb-2 btn btn-block btn-warning">Complete Website</button></div>
                        <div class="col-md-4"><button type="button" id="webdesign" class="mb-2 btn btn-block btn-warning">UX & Web Design</button></div>
                        <div class="col-md-4"><button type="button" id="branding" class="mb-2 btn btn-block btn-warning">Branding</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="brandingweb" class="mb-2 btn btn-block btn-warning">Branding & Web</button></div>
                        <div class="col-md-4"><button type="button" id="degitalcamaign" class="mb-2 btn btn-block btn-warning">Degital Campaign</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- for start a project -->
        <!-- for join a team -->
        <div class="contriner mm" id="forjoinateam">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>There is no “I” in “team”, but we might be looking for</h3>
                    <h3>“U”. What position catches your eye?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="backenddeveloper" class="mb-2 btn btn-block btn-warning">Back-End Developer</button></div>
                        <div class="col-md-4"><button type="button" id="frontenddeveloper" class="mb-2 btn btn-block btn-warning">Front-End Developer</button></div>
                        <div class="col-md-4"><button type="button" id="projectmanager" class="mb-2 btn btn-block btn-warning">Project Manager</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="interactivedesigner" class="mb-2 btn btn-block btn-warning">Interactive Designer</button></div>
                        <div class="col-md-4"><button type="button" id="artdirector" class="mb-2 btn btn-block btn-warning">Art Director</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- for join a team -->
        <!-- apply as an intern -->
        <div class="container mm" id="forapplyanintern">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>How did you learn about Locomotive?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- apply as an intern -->
        <!-- drop a quick word -->
        <div class="container mm" id="fordropaquickword">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>We’re not in the history books *yet*, so how’d you</h3>
                    <h3>learn about us?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- drop a quick word -->
        <!-- start project -->
            <!-- complete web site -->
            <div class="container mm" id="forcompletewebsite">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>You can’t put a price on happiness — oh wait,</h3>
                        <h3>yes we can! What’s your budget range for this</h3>
                        <h3>Complete Website project?</h3> 
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="30to50" class="mb-2 btn btn-block btn-warning 30to50">30-50k</button></div>
                            <div class="col-md-4"><button type="button" id="50to75" class="mb-2 btn btn-block btn-warning 50to75">50-75k</button></div>
                            <div class="col-md-4"><button type="button" id="75to100" class="mb-2 btn btn-block btn-warning 75to100">75-100k</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="100up" class="mb-2 btn btn-block btn-warning 100up">100k+</button></div>
                            <div class="col-md-4"><button type="button" id="1mildoloars" class="mb-2 btn btn-block btn-warning 1mildoloars">1 million dollars</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- complete-web site -->
            <!-- web design -->
            <div class="container mm" id="forwebdesign">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>You can’t put a price on happiness — oh wait, yes</h3>
                        <h3>we can! What’s your budget range for this UX & Web</h3>  
                        <h3>Design project?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="15to30" class="mb-2 btn btn-block btn-warning 15to30">15-30k</button></div>
                            <div class="col-md-4"><button type="button" id="30to50" class="mb-2 btn btn-block btn-warning 30to50">30-50k</button></div>
                            <div class="col-md-4"><button type="button" id="50to75" class="mb-2 btn btn-block btn-warning 50to75">50-75k</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="75up" class="mb-2 btn btn-block btn-warning 50to75">75k+</button></div>
                            <div class="col-md-4"><button type="button" id="1mildoloars" class="mb-2 btn btn-block btn-warning 1mildoloars">1 million dollars</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- web design -->
            <!-- barnding -->
            <div class="container mm" id="forbranding">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>What is your budget range for this Branding</h3> 
                        <h3>project?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="10to15" class="mb-2 btn btn-block btn-warning 75to100">10-15k</button></div>
                            <div class="col-md-4"><button type="button" id="15to30" class="mb-2 btn btn-block btn-warning 15to30">15-30k</button></div>
                            <div class="col-md-4"><button type="button" id="30to50" class="mb-2 btn btn-block btn-warning 30to50">30-50k</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="50up" class="mb-2 btn btn-block btn-warning 50up">50k+</button></div>
                            <div class="col-md-4"><button type="button" id="1mildoloars" class="mb-2 btn btn-block btn-warning 1mildoloars">1 million dollars</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- branding -->
            <!-- branding && web -->
            <div class="container mm" id="forbrandingweb">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>They say the best things in life are free. They lied. </h3>
                        <h3>What’s your budget range for this Branding & Web project?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="30to50" class="mb-2 btn btn-block btn-warning 30to50">30-50k</button></div>
                            <div class="col-md-4"><button type="button" id="50to75" class="mb-2 btn btn-block btn-warning 50to75">50-75k</button></div>
                            <div class="col-md-4"><button type="button" id="75to100" class="mb-2 btn btn-block btn-warning 75to100">75-100k</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="100up" class="mb-2 btn btn-block btn-warning 100up">100k+</button></div>
                            <div class="col-md-4"><button type="button" id="1mildoloars" class="mb-2 btn btn-block btn-warning 1mildoloars">1 million dollars</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- branding && web -->
            <!-- degital campaign -->
            <div class="container mm" id="fordegitalcamaign">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>So you would like to work with one of the best</h3>
                        <h3>teams in the world? What kind of project would you</h3>
                        <h3>like us to craft for you?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="30to50" class="mb-2 btn btn-block btn-warning 30to50">30-50k</button></div>
                            <div class="col-md-4"><button type="button" id="50to75" class="mb-2 btn btn-block btn-warning 50to75">50-75k</button></div>
                            <div class="col-md-4"><button type="button" id="75to100" class="mb-2 btn btn-block btn-warning 75to100">75-100k</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="100up" class="mb-2 btn btn-block btn-warning 100up">100k+</button></div>
                            <div class="col-md-4"><button type="button" id="1mildoloars" class="mb-2 btn btn-block btn-warning 1mildoloars">1 million dollars</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- degital campaign -->
        <!-- start project -->
        <!-- join team -->
            <!-- back end development -->
            <div class="container mm" id="forbackenddeveloper">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Who’s been spilling the beans about Locomotive?</h3>
                        <h3>How did you learn about Locomotive?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                            <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                            <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                            <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- back end development -->
            <!-- front end developer -->
            <div class="container mm" id="forfrontenddeveloper">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Word on the street is… well, we’re the word on the</h3>
                        <h3>street! So where’d you hear about Locomotive?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                            <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                            <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                            <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- front end developer  -->
            <!-- project manager -->
            <div class="container mm" id="forprojectmanager">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>We’re not in the history books *yet*, so how’d you</h3>
                        <h3>learn about us?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                            <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                            <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                            <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- project manager -->
            <!-- interactive designer -->
            <div class="container mm" id="forinteractivedesigner">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>So who can I give props to for telling you about</h3>
                        <h3>Locomotive?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                            <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                            <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                            <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- interactive designer -->
            <!-- art director -->
            <div class="container mm" id="forartdirector">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>We’re not in the history books *yet*, so how’d you</h3>
                        <h3>learn about us?</h3>
                        <div class="row">
                            <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                            <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                            <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                            <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                            <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- art director -->
        <!-- join team -->
        <!-- award website -->
        <div class="container mm" id="forawardwebsite">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>I can already tell I’m going to like you. Tell me more</h3>
                    <h3>about yourself.</h3>
                    <form action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Resume</label>
                                    <input type="file" name="resume" id="resume" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Job</label>
                                    <select name="job" id="job" class="form-control">
                                        <option value="Back-end developer">Back-End Developer</option>
                                        <option value="fornt-end developer">Fornt-End Developer</option>
                                        <option value="project-manager">Project Manager</option>
                                        <option value="Interactive Designer">Interactive Designer</option>
                                        <option value="Art Director">Art Director</option>
                                    </select>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>
        <!-- award website -->
        <!-- project we did -->
        <div class="container mm" id="forprojectwedid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Tell me a little more about yourself. Don’t worry, I</h3>
                    <h3>took a sociology class and am *so* open-minded</h3>
                    <h3>and non-judgemental.</h3>
                    <form action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Resume</label>
                                    <input type="file" name="resume" id="resume" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Job</label>
                                    <select name="job" id="job" class="form-control">
                                        <option value="Back-end developer">Back-End Developer</option>
                                        <option value="fornt-end developer">Fornt-End Developer</option>
                                        <option value="project-manager">Project Manager</option>
                                        <option value="Interactive Designer">Interactive Designer</option>
                                        <option value="Art Director">Art Director</option>
                                    </select>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>
        <!-- project we did -->
        <!-- an artical -->
        <div class="container mm" id="foranartical">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Now that we’re basically BFFs, tell me more about</h3>
                    <h3>yourself.</h3>
                    <form action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Resume</label>
                                    <input type="file" name="resume" id="resume" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Job</label>
                                    <select name="job" id="job" class="form-control">
                                        <option value="Back-end developer">Back-End Developer</option>
                                        <option value="fornt-end developer">Fornt-End Developer</option>
                                        <option value="project-manager">Project Manager</option>
                                        <option value="Interactive Designer">Interactive Designer</option>
                                        <option value="Art Director">Art Director</option>
                                    </select>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>
        <!-- an artical -->
        <!-- a friend -->
        <div class="container mm" id="forafriend">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Now, tell me more about you. Then, a fight to the</h3>
                    <h3>death with your competition! Joking… or, am I?</h3>
                    <form action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Resume</label>
                                    <input type="file" name="resume" id="resume" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Job</label>
                                    <select name="job" id="job" class="form-control">
                                        <option value="Back-end developer">Back-End Developer</option>
                                        <option value="fornt-end developer">Fornt-End Developer</option>
                                        <option value="project-manager">Project Manager</option>
                                        <option value="Interactive Designer">Interactive Designer</option>
                                        <option value="Art Director">Art Director</option>
                                    </select>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>
        <!-- a friend -->
        <!-- word on a street -->
        <div class="container mm" id="forwordonstreet">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>This is not Fight Club. We love people talking about</h3>
                    <h3>us. Tell me a little more about yourself?</h3>
                    <form action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label for="">Resume</label>
                                    <input type="file" name="resume" id="resume" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Job</label>
                                    <select name="job" id="job" class="form-control">
                                        <option value="Back-end developer">Back-End Developer</option>
                                        <option value="fornt-end developer">Fornt-End Developer</option>
                                        <option value="project-manager">Project Manager</option>
                                        <option value="Interactive Designer">Interactive Designer</option>
                                        <option value="Art Director">Art Director</option>
                                    </select>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>
        <!-- word on a street -->
        <!-- 30 to 50 k -->
        <div class="container mm" id="for30to50">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>So who can I give props to for telling you about</h3>
                    <h3>Locomotive?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 30 to 50 k -->
        <!-- 50 to 75 k -->
        <div class="container mm" id="for50to75">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Word on the street is… well, we’re the word on the</h3>
                    <h3>street! So where’d you hear about Locomotive?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 50 to 75 k -->
        <!-- 75 to 100 k -->
        <div class="container mm" id="for75to100">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>How did you learn about Locomotive?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 75 to 100 k  -->
        <!-- 100up -->
        <div class="container mm" id="for100up">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Now please fill this questionnaire about your project. It’s like a Buzzfeed</h3>
                    <h3>quiz — people still do those, right?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 100up -->
        <!-- 1 million dolor -->
        <div class="container mm" id="for1mildoloars">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>So who can I give props to for telling you about</h3> 
                    <h3>Locomotive?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 1 million dolor -->
        <!-- 15 to 30 k -->
        <div class="container mm" id="for15to30">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Who’s been spilling the beans about Locomotive?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 15 to 30 k -->
        <!-- 50 up -->
        <div class="container mm" id="for50up">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>We’re not in the history books *yet*, so how’d you</h3>
                    <h3>learn about us?</h3>
                    <div class="row">
                        <div class="col-md-4"><button type="button" id="awardwebsite" class="mb-2 btn btn-block btn-warning awardwebsite">Awards Websites</button></div>
                        <div class="col-md-4"><button type="button" id="projectwedid" class="mb-2 btn btn-block btn-warning projectwedid">A project we did</button></div>
                        <div class="col-md-4"><button type="button" id="anartical" class="mb-2 btn btn-block btn-warning anartical">An artical</button></div>
                        <div class="col-md-4 offset-md-2"><button type="button" id="afriend" class="mb-2 btn btn-block btn-warning afriend">A friend</button></div>
                        <div class="col-md-4"><button type="button" id="wordonstreet" class="mb-2 btn btn-block btn-warning wordonstreet">Word on the street</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 50up -->
        <!-- <div class="container mm">
            <div class="row">
                <div class="col-md-6 fspeech">
                    <audio controls id="fspeechaudio" allow="autoplay">
                        <source src="http://localhost/tts/audio/1601017618.mp3" type='audio/mp3'>
                    </audio>
                </div> -->
                <!--<div class="col-md-6 sspeech">
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
                <div class="col-md-6 forprojectwedid_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601285896.mp3" type='audio/mp3'>
                    </audio>
                </div> 
                <div class="col-md-6 foranartical_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601286670.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 forafriend_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601287175.mp3" type='audio/mp3'>
                    </audio>
                </div> 
                <div class="col-md-6 forwordonstreet_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601287755.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 for30to50_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601289592.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 for50to75_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601289526.mp3" type='audio/mp3'>
                    </audio>
                </div> 
                <div class="col-md-6 for75to100_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601290725.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 for100up_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601291948.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 for1mildoloars_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601292412.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 for15to30_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601293041.mp3" type='audio/mp3'>
                    </audio>
                </div>
                <div class="col-md-6 for50up_speech">
                    <audio controls id="autoaudio" autoplay="true" >
                        <source src="http://localhost/tts/audio/1601294750.mp3" type='audio/mp3'>
                    </audio>
                </div> -->
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
            $('#forprojectwedid').hide();
            $('.forprojectwedid_speech').hide();
            $('#foranartical').hide();
            $('.foranartical_speech').hide();
            $('#forafriend').hide();
            $('.forafriend_speech').hide();
            $('#forwordonstreet').hide();
            $('.forwordonstreet_speech').hide();
            $('#for30to50').hide();
            $('.for30to50_speech').hide();
            $('#for50to75').hide();
            $('.for50to75_speech').hide();
            $('#for75to100').hide();
            $('.for75to100_speech').hide();
            $('#for100up').hide();
            $('.for100up_speech').hide();
            $('#for1mildoloars').hide();
            $('.for1mildoloars_speech').hide();
            $('#for15to30').hide();
            $('.for15to30_speech').hide();
            $('#for50up').hide();
            $('.for50up_speech').hide();
            setTimeout(() => {
                // var audio = document.querySelector("#fspeechaudio");
                $("#fspeechaudio")[0].play();
                console.log($("#fspeechaudio")[0]);
                // audio.play();
            }, 2000);
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
                $('#forprojectwedid').hide();
                $('.forprojectwedid_speech').hide();
                $('#foranartical').hide();
                $('.foranartical_speech').hide();
                $('#forafriend').hide();
                $('.forafriend_speech').hide();
                $('#forwordonstreet').hide();
                $('.forwordonstreet_speech').hide();
                $('#for30to50').hide();
                $('.for30to50_speech').hide();
                $('#for50to75').hide();
                $('.for50to75_speech').hide();
                $('#for75to100').hide();
                $('.for75to100_speech').hide();
                $('#for100up').hide();
                $('.for100up_speech').hide();
                $('#for1mildoloars').hide();
                $('.for1mildoloars_speech').hide();
                $('#for15to30').hide();
                $('.for15to30_speech').hide();
                $('#for50up').hide();
                $('.for50up_speech').hide();
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
                $('#forstartaproject').hide();
                $('.forstartaproject_speech').hide();
                $('#forcompletewebsite').show();
                $('.forcompletewebsite_speech').show();
            });
            $('#webdesign').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forstartaproject').hide();
                $('.forstartaproject_speech').hide();
                $('#forwebdesign').show();
                $('.forwebdesign_speech').show();
            });
            $('#branding').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forstartaproject').hide();
                $('.forstartaproject_speech').hide();
                $('#forbranding').show();
                $('.forbranding_speech').show();
            });
            $('#brandingweb').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forstartaproject').hide();
                $('.forstartaproject_speech').hide();
                $('#forbrandingweb').show();
                $('.forbrandingweb_speech').show();
            });
            $('#degitalcamaign').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forstartaproject').hide();
                $('.forstartaproject_speech').hide();
                $('#fordegitalcamaign').show();
                $('.fordegitalcamaign_speech').show();
            }); 
            $('#backenddeveloper').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forjoinateam').hide();
                $('.forjoinateam_speech').hide();
                $('#forbackenddeveloper').show();
                $('.forbackenddeveloper_speech').show();
            });
            $('#frontenddeveloper').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forjoinateam').hide();
                $('.forjoinateam_speech').hide();
                $('#forfrontenddeveloper').show();
                $('.forfrontenddeveloper_speech').show();
            });
            $('#projectmanager').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forjoinateam').hide();
                $('.forjoinateam_speech').hide();
                $('#forprojectmanager').show();
                $('.forprojectmanager_speech').show();
            });
            $('#interactivedesigner').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forjoinateam').hide();
                $('.forjoinateam_speech').hide();
                $('#forinteractivedesigner').show();
                $('.forinteractivedesigner_speech').show();
            });
            $('#artdirector').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
                $('#forjoinateam').hide();
                $('.forjoinateam_speech').hide();
                $('#forartdirector').show();
                $('.forartdirector_speech').show();
            });
            $('.awardwebsite').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
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
                $('#fordropaquickword').hide();
                $('.fordropaquickword_speech').hide();
                $('#forapplyanintern').hide();
                $('.forapplyanintern_speech').hide();
                $('#for30to50').hide();
                $('.for30to50_speech').hide();
                $('#for50to75').hide();
                $('.for50to75_speech').hide();
                $('#for75to100').hide();
                $('.for75to100_speech').hide();
                $('#for100up').hide();
                $('.for100up_speech').hide();
                $('#for1mildoloars').hide();
                $('.for1mildoloars_speech').hide();
                $('#for15to30').hide();
                $('.for15to30_speech').hide();
                $('#for50up').hide();
                $('.for50up_speech').hide();
                $('#forawardwebsite').show();
                $('.forawardwebsite_speech').show();
            });
            $('.projectwedid').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
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
                $('#fordropaquickword').hide();
                $('.fordropaquickword_speech').hide();
                $('#forapplyanintern').hide();
                $('.forapplyanintern_speech').hide();
                $('#for30to50').hide();
                $('.for30to50_speech').hide();
                $('#for50to75').hide();
                $('.for50to75_speech').hide();
                $('#for75to100').hide();
                $('.for75to100_speech').hide();
                $('#for100up').hide();
                $('.for100up_speech').hide();
                $('#for1mildoloars').hide();
                $('.for1mildoloars_speech').hide();
                $('#for15to30').hide();
                $('.for15to30_speech').hide();
                $('#for50up').hide();
                $('.for50up_speech').hide();
                $('#forprojectwedid').show();
                $('.forprojectwedid_speech').show();
            });
            $('.anartical').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
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
                $('#fordropaquickword').hide();
                $('.fordropaquickword_speech').hide();
                $('#forapplyanintern').hide();
                $('.forapplyanintern_speech').hide();
                $('#for30to50').hide();
                $('.for30to50_speech').hide();
                $('#for50to75').hide();
                $('.for50to75_speech').hide();
                $('#for75to100').hide();
                $('.for75to100_speech').hide();
                $('#for100up').hide();
                $('.for100up_speech').hide();
                $('#for1mildoloars').hide();
                $('.for1mildoloars_speech').hide();
                $('#for15to30').hide();
                $('.for15to30_speech').hide();
                $('#for50up').hide();
                $('.for50up_speech').hide();
                $('#foranartical').show();
                $('.foranartical_speech').show();
            });
            $('.afriend').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
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
                $('#fordropaquickword').hide();
                $('.fordropaquickword_speech').hide();
                $('#forapplyanintern').hide();
                $('.forapplyanintern_speech').hide();
                $('#for30to50').hide();
                $('.for30to50_speech').hide();
                $('#for50to75').hide();
                $('.for50to75_speech').hide();
                $('#for75to100').hide();
                $('.for75to100_speech').hide();
                $('#for100up').hide();
                $('.for100up_speech').hide();
                $('#for1mildoloars').hide();
                $('.for1mildoloars_speech').hide();
                $('#for15to30').hide();
                $('.for15to30_speech').hide();
                $('#for50up').hide();
                $('.for50up_speech').hide();
                $('#forafriend').show();
                $('.forafriend_speech').show();
            });
            $('.wordonstreet').on('click', function(){
                $('#scontainer').hide();
                $('.sspeech').hide();
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
                $('#fordropaquickword').hide();
                $('.fordropaquickword_speech').hide();
                $('#forapplyanintern').hide();
                $('.forapplyanintern_speech').hide();
                $('#for30to50').hide();
                $('.for30to50_speech').hide();
                $('#for50to75').hide();
                $('.for50to75_speech').hide();
                $('#for75to100').hide();
                $('.for75to100_speech').hide();
                $('#for100up').hide();
                $('.for100up_speech').hide();
                $('#for1mildoloars').hide();
                $('.for1mildoloars_speech').hide();
                $('#for15to30').hide();
                $('.for15to30_speech').hide();
                $('#for50up').hide();
                $('.for50up_speech').hide();
                $('#forwordonstreet').show();
                $('.forwordonstreet_speech').show();
            });
            $('.30to50').on('click', function(){
                $('#forcompletewebsite').hide();
                $('.forcompletewebsite_speech').hide();
                $('#forbranding').hide();
                $('.forbranding_speech').hide();
                $('#forbrandingweb').hide();
                $('.forbrandingweb_speech').hide();
                $('#forwebdesign').hide();
                $('.forwebdesign_speech').hide();
                $('#fordegitalcamaign').hide();
                $('.fordegitalcamaign_speech').hide();
                $('#for30to50').show();
                $('.for30to50_speech').show();
            });
            $('.50to75').on('click', function(){
                $('#forcompletewebsite').hide();
                $('.forcompletewebsite_speech').hide();
                $('#forwebdesign').hide();
                $('.forwebdesign_speech').hide();
                $('#forbrandingweb').hide();
                $('.forbrandingweb_speech').hide();
                $('#fordegitalcamaign').hide();
                $('.fordegitalcamaign_speech').hide();
                $('#for50to75').show();
                $('.for50to75_speech').show();
            });
            $('.75to100').on('click', function(){
                $('#forcompletewebsite').hide();
                $('.forcompletewebsite_speech').hide();
                $('#forbrandingweb').hide();
                $('.forbrandingweb_speech').hide();
                $('#fordegitalcamaign').hide();
                $('.fordegitalcamaign_speech').hide();
                $('#for75to100').show();
                $('.for75to100_speech').show();
            });
            $('.100up').on('click', function(){
                $('#forcompletewebsite').hide();
                $('.forcompletewebsite_speech').hide();
                $('#forbrandingweb').hide();
                $('.forbrandingweb_speech').hide();
                $('#fordegitalcamaign').hide();
                $('.fordegitalcamaign_speech').hide();
                $('#for100up').show();
                $('.for100up_speech').show();
            });
            $('.1mildoloars').on('click', function(){
                $('#forcompletewebsite').hide();
                $('.forcompletewebsite_speech').hide();
                $('#forbranding').hide();
                $('.forbranding_speech').hide();
                $('#forbrandingweb').hide();
                $('.forbrandingweb_speech').hide();
                $('#forwebdesign').hide();
                $('.forwebdesign_speech').hide();
                $('#fordegitalcamaign').hide();
                $('.fordegitalcamaign_speech').hide();
                $('#for1mildoloars').show();
                $('.for1mildoloars_speech').show();
            });
            $('.15to30').on('click', function(){
                $('#forwebdesign').hide();
                $('.forwebdesign_speech').hide();
                $('#forbranding').hide();
                $('.forbranding_speech').hide();
                $('#for15to30').show();
                $('.for15to30_speech').show();
            });
            $('.50up').on('click', function(){
                $('#forbranding').hide();
                $('.forbranding_speech').hide();
                $('#for50up').show();
                $('.for50up_speech').show();
            });
        });
    </script>
</html>