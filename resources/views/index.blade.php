@extends('master.layout')
@section('title', 'Adan Olivos')
@section('content')
<div class="intro_container">
    <div class="intro-section">
        <img class="profile-img" src="{{asset('img/profile.jpg')}}">
        <div class="about-section">
                <h2>Adan Olivos</h2>
            
                <p>I am an Access Management Engineer looking to transition into Web Development Web Development or Full Stack Developement.<br/> Bringing to the table knowledge in security protocols and access management skills that can be use in user administration.</p> 
         </div>
    </div>
</div>
<!-- about -->
<div class="skills-container">
    <div class="row">
        <div class="col-md-6 education-section">
            <div class="education">
                <div class="title">
                    <h2>Education</h2>
                </div>
                <div class="content">
                    <div class="panel">
                        <div class="panel-title">
                            <h3>New Jersey City University</h3>
                        </div>
                        <div class="panel-body">
                            <em>09/2014 - 01/2018</em>
                            <p class="card-text">Bachelors Degree in Computer Science</p>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title">
                            <h3>Hudson Community College</h3>
                        </div>
                        <div class="panel-body">
                            <em>09/2006 - 05/2011</em>
                            <p class="card-text">Associates Degree in Computer Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 skills-section">   
                <div class="title">
                    <h2>Technical Skills</h2>
                </div>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Version Control</td>
                                <td>Bitbucket, Git</td>
                            </tr>
                            <tr>
                                <td>Programming Languages</td>
                                <td>Java, PHP, JavaScript, Python, HTML, CSS</td>
                            </tr>
                            <tr>
                                <td>Frameworks</td>
                                <td>Bootstrap, ReactJs, Laravel, SASS</td>
                            </tr>
                            <tr>
                                <td>Oprating Systems</td>
                                <td>Linux, MacOs, Windows</td>
                            </tr>
                            <tr>
                                <td>Databases</td>
                                <td>MySQL, MongoDB, Access</td>
                            </tr>
                            <tr>
                                <td>Directory Services</td>
                                <td>Active Directory, OpenDJ</td>
                            </tr>
                            <tr>
                                <td>Developement Methodologies</td>
                                <td>Agile, Waterfall</td>
                            </tr>
                            <tr>
                                <td>S.E.O</td>
                                <td>Google Analytics</td>
                            </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
<!-- Experience -->
<div class="experience-container">
    <div class="row">
        <div class="col-md-12">
            <h2>Experience</h2>
                <div class="clearfix"></div>
                <div class="ex-content">
                <div class="ex-box">
                        <h3>Hub City Media</h3>
                        <em class="location">South Plainfield, NJ.</em>
                        <em class="date">08/2019 - Present</em>
                        <p>Web Development</p>
                    </div>
                    <div class="ex-box">
                        <h3>Freelance</h3>
                        <em class="date">05/2015 - 08/2018</em>
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
</div>


<!-- Freelance & Personal Projects -->

<div class="project-container">
<h2>Freelance</h2>
    <div class="row section-content">
        <div class="col-md-6 col-sm-12">
            <img class="card-img-top" src="{{asset('img/PassaicVisionCenter.png')}}">
            <div class="card-body">
                <p><strong>Passaic Vision Center</strong> is a freelance project for an ophthalmologists office. They needed a website to showcase and promote their services to the community.
                They also needed the implementation of google analytics to keep track of their website visitors and their demographics. Visit <a href="http://gentle-retreat-33476.herokuapp.com/" target="_blank"> Passaic Vision Center</a> 
                </p>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">    
            <img class="card-img-top" src="{{asset('img/CliftonEyeSpecialists.png')}}">
            <div class="card-body">
                <p><Strong>Clifton Eye Especialist</Strong> is an extension of Passaic Vision Center and the base  website to showcase their service of both locations, as they were consolidating 
                into a single organization. Website included google analytics to keep track of their visitors demographics and a SEO campaing. Vist <a href="http://warm-ridge-65957.herokuapp.com" target="_blank">Clifton Eye Especialist</i></a> 
                </p>
            </div>
        </div>
    </div>

   
    <h2>Project</h2>
    <div class="row section-content-project">
        <div class="col-md-12 col-sm-12">
            <img class="card-img-top" src="{{asset('img/GetFit.png')}}">
            <div class="card-body">    
                <p><Strong>Get Fit</Strong> is a on going personal project that will keep track of a users fitness goals. Visit <a href="http://polar-escarpment-87243.herokuapp.com/" target="_blank">Get Fit</a>
                </p>
            </div>
        </div>
        <!--<div class="card">
            <img class="card-img-top" src="{{asset('img/MdDirectory.png')}}">
            <div class="card-body">
                <div class="title"> Md. Directory</div>
                <p>M.D. Directory is a personal project that helps users to seek for local medical help.
                    also it helps doctors to be in touch with their patients.
                    <a href="http://fast-oasis-24569.herokuapp.com/" target="_blank">visit page</a>
                </p>
            </div>
        </div>
    </div>-->
</div>
@endsection