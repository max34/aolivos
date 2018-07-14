@extends('master.layout')
@section('title', 'Adan Olivos')
@section('content')
<div class="main-section">
    <div class="content">
        <h1 class="top-left">Adan Olivos</h1>
        <div class="bottom-right">
            <h2>Computer Science Graduate</h2>
            <p>Interest in mobile and web developement.</p>
        </div>
    </div>
</div>
<!-- About -->
<div class="section bg-white">
    <div class="section-content">
        <div class="title">
            <h3>About</h3>
            <br>
            <span><i class="far fa-user fa-5x"></i></span>
        </div>
        <div class="content">
            <h3>Adan Olivos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et
                vestibulum nulla. Sed varius ante vitae tellus bibendum, in blandit nulla
                dignissim. Ut ac volutpat ipsum. Fusce in aliquet ipsum, eget tempor massa.
                <br>
                Praesent vitae dolor non eros scelerisque accumsan. Sed tincidunt cursus eros,
                eu sagittis tellus lobortis et. Mauris sit amet ex metus. Nam consectetur elit
                nec mi tempor, at placerat ligula mattis. Aliquam sed dignissim risus,
                quis cursus libero. Suspendisse nec rutrum justo. Cras at feugiat neque.
                In iaculis enim sed massa fermentum, vitae finibus orci feugiat. Sed nec
                lacinia ligula. In leo diam, dapibus id nibh sed, efficitur rutrum velit.
                Cras ornare scelerisque elit at accumsan.
                Etiam quis lacus molestie, ornare magna vel, faucibus nulla.</p>
        </div>
    </div>

</div>

<!-- Education -->
<div class="section bg-blue">
    <div class="section-content">
        <div class="title">
            <h3>Education</h3>
            <br>
            <span><i class="fa fa-graduation-cap fa-5x"></i></span>
        </div>
        <div class="content">
            <div class="box">
                <h3>New Jersey City University, Jersey City.</h3>
                <p><strong>Bachelors Computer Science</strong></p>
                <p>G.P.A: 3.2</p>
                <p>Graduation: December 2018.</p>
            </div>
            <div class="box">
                <h3>Hudson County Community College, Jersey City.</h3>
                <p><strong>Associates in Computer Science</strong></p>
                <p>G.P.A: 3.0</p>
                <p>Graduation: May 2011.</p>
            </div>
        </div>
    </div>
</div>

<!-- Experience -->
<div class="section bg-white">
    <div class="section-content">
        <div class="title">
            <h3>Experience</h3>
            <br>
            <span><i class="fa fa-user-tie fa-5x"></i></span>
        </div>
        <div class="content">
            <div class="ex-box">
                <h3>Freelance</h3>
                <em class="date">05/2015 - Present</em>
                <p>Web Development</p>
            </div>
            <div class="ex-box">
                <h3>Emagid</h3>
                <em class="location">Manhattan, NY.</em>
                <em class="date">10/2016 - 12/2016</em>
                <p>Front-End Intern</p>
            </div>
            <div class="ex-box">
                <h3>Alchemy Tech Solutions </h3>
                <em class="location">Manhattan, NY.</em>
                <em class="date">10/2015 - 01/2016</em>
                <p>Full MEAN Stack Intern</p>
            </div>
        </div>
    </div>
</div>

<!-- Projects -->
<div class="section bg-blue">
    <div class="section-content">
        <div class="title">
            <h3>Projects</h3>
            <br>
            <span><i class="fa fa-briefcase fa-5x"></i></span>
        </div>
        <div class="content">
            <div class="panel">
                <div class="img-box">
                    <div class="clearfix">
                        <div class="image-container">
                            <img src="{{asset('img/CliftonEyeSpecialists.png')}}">
                        </div>
                    </div>
                    <h3>Clifton Eye Specialists</h3>
                    <hr>
                    <p>Freelance project for an Optometrist. This project help him be known
                    by the Passaic County Community. It implemented S.E.O strategy, Agile development
                        process, and budget planning. <a href="http://warm-ridge-65957.herokuapp.com" target="_blank"><i class="fa fa-share-square"></i></a> </p>

                </div>
            </div>
            <div class="panel">
                <div class="img-box">
                    <div class="clearfix">
                        <div class="image-container">
                            <img src="{{asset('img/GetFit.png')}}">
                        </div>
                    </div>
                    <h3>Get Fit</h3>
                    <hr>
                    <p>A personal project that will help an user to keep his or hers physical
                        goals. <a href="http://polar-escarpment-87243.herokuapp.com/" target="_blank"><i class="fa fa-share-square"></i></a></p>
                </div>
            </div>
            <div class="panel">
                <div class="img-box">
                    <div class="clearfix">
                        <div class="image-container">
                            <img src="{{asset('img/MdDirectory.png')}}">
                        </div>
                    </div>
                    <h3>Md. Directory</h3>
                    <hr>
                    <p>M.D. Directory is a personal project that helps users to seek for local medical help.
                        also it helps doctors to be in touch with their patients.
                    <a href="http://fast-oasis-24569.herokuapp.com/" target="_blank"><i class="fa fa-share-square"></i></a></p>
                </div>
            </div>
    </div>
</div>
</div>

<!-- Skills -->
<div class="section bg-white">
    <div class="section-content">
        <div class="title">
            <h3>Skills</h3>
            <br>
            <span><i class="fa fa-toolbox fa-5x"></i></span>
        </div>
        <div class="content">
            <div class="dual-col">
                <h3>HTML/CSS</h3>
                <div class="w3-progress-container">
                    <div class="w3-progressbar" style="width:90%;"></div>
                </div>
            </div>
            <div class="dual-col">
                <h3>JavaScript</h3>
                <div class="w3-progress-container">
                    <div class="w3-progressbar" style="width:70%;"></div>
                </div>
            </div>
            <div class="dual-col">
                <h3>MySql</h3>
                <div class="w3-progress-container">
                    <div class="w3-progressbar" style="width:85%;"></div>
                </div>
            </div>
            <div class="dual-col">
                <h3>GitHub</h3>
                <div class="w3-progress-container">
                    <div class="w3-progressbar" style="width:75%;"></div>
                </div>
            </div>
            <div class="dual-col">
                <h3>MS Suite</h3>
                <div class="w3-progress-container">
                    <div class="w3-progressbar" style="width:80%;"></div>
                </div>
            </div>
            <div class="dual-col">
                <h3>PHP</h3>
                <div class="w3-progress-container">
                    <div class="w3-progressbar" style="width:75%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Social -->
<div class="section bg-blue">
    <div class="section-content">
        <div class="title">
            <h3>Social</h3>
            <br>
            <span><i class="fa fa-share-square fa-4x"></i></span>
        </div>
        <div class="content">
            <div class="dual-col">
                <span><i class="fab fa-facebook-square fa-4x"></i></span>
                <span><i class="fab fa-google-plus-square fa-4x"></i></span>
                <span><i class="fab fa-twitter-square fa-4x"></i></span>
                <span><i class="fab fa-github-square fa-4x"></i></span>
            </div>
        </div>
    </div>
</div>
@endsection