@extends('master.layout')
@section('title', 'Adan Olivos')
@section('content')
<div class="container-fluid">
    <div class="jumbotron">
        <img class="profile-img" src="{{asset('img/download.jpeg')}}">
        <h1>Adan Olivos</h1>    
        <h2>Senior Systems Engineer</h2>
        <p>IAM enthusiast</p>
        <p>Interest in mobile and web developement.</p>
    </div>
</div>
<!-- about -->
<div class="container-fluid bg-white">
<h2>About me</h2>
    <div class="row">
        <div class="clearfix"></div>
        <p class="paragraph">
            As a Senior Systems Engineer, I'll bring to the table a year plus of experience in Access Management, Directory Services, &amp; Identity Management, 
            also bring three years of freelance web development experience and seven years of customer service.
        </br>
            I have work and understand Agile and Waterfall developement methodologies, and work well as part of a team as well as individually.
        </p>
        <table class="table table-striped">
            <thead class="thead-dark">
               <tr>
                   <th colspan="2">Development tools experience</th>
               </tr>
            </thead>
            <tbody class="table-body">
                <tr>
                    <td>Operating Systems</td>
                    <td>Windows, MacOs, Linux</td>  
                </tr>
                <tr>
                    <td>Producivity Tools</td>
                    <td>Jira, Trello, Microsoft suite, Google suite</td>
                </tr>
                <tr>
                    <td>Database Systems</td>
                    <td>MongoDB, MySql</td>
                </tr>
                <tr>
                    <td>Version Control</td>
                    <td>Bitbucket, Github</td>
                </tr>
                <tr>
                    <td>Programming Languages</td>
                    <td>Java, Python, Javascript, PHP</td>
                </tr>
                <tr>
                    <td>Frameworks and Processors</td>
                    <td>Bootstrap, Laravel, Sass</td>
                </tr>
                <tr>
                    <td>Miscellaneous</td>
                    <td>Ansible, bash scripting, Wordpress</td>
                </tr>
                <tr>
                    <td>IAM</td>
                    <td>Forgerock Access Management, Identity Management, Directory Services</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- Education -->
<div class="container-fluid bg-white">
<h2>Education</h2>
    <div class="row">
    <div class="clearfix"></div>
        <!--<h3>Education</h3>-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"> New Jersey City University</div>
                    <em>09/2014 - 01/2018</em>
                    <p class="card-text">Bachelors Degree in Computer Science</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                    <div class="card-title"> Hudson County Community College</div>
                    <em>09/2006 - 05/2011</em>
                    <p class="card-text">Associates Degree in Computer Science</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Experience -->
<div class="container-fluid bg-white">
    <h2>Experience</h2>
    <div class="section-content">
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

<!-- Freelance -->
<div class="container-fluid bg-white">
<h2>Freelance</h2>
    <div class="section-content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/PassaicVisionCenter.png')}}">
                    <div class="card-body">
                        <div class="card-title">Passaic Vision Center</div>
                        <p>Freelance project for an Optometrist. This project help him be known
                        by the Passaic County Community. It implemented S.E.O strategy, Agile development
                            process, and budget planning. <a href="http://gentle-retreat-33476.herokuapp.com/" target="_blank"><i class="fa fa-share-square"></i></a> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/CliftonEyeSpecialists.png')}}">
                    <div class="card-body">
                        <div class="card-title">Clifton Eye Specialists</div>
                        <p>Freelance project for an Optometrist. This project help him be known
                            by the Passaic County Community. It implemented S.E.O strategy, Agile development
                            process, and budget planning. <a href="http://warm-ridge-65957.herokuapp.com" target="_blank"><i class="fa fa-share-square"></i></a> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- projects -->
<div class="container-fluid bg-white">
    <div class="section-content">
        <h2>Projects</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/GetFit.png')}}">
                    <div class="card-body">
                        <div class="title"> Get Fit</div>
                        <p>A personal project that will help an user to keep his or hers physical
                            goals. <a href="http://polar-escarpment-87243.herokuapp.com/" target="_blank"><i class="fa fa-share-square"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="{{asset('img/MdDirectory.png')}}">
                    <div class="card-body">
                        <div class="title"> Md. Directory</div>
                        <p>M.D. Directory is a personal project that helps users to seek for local medical help.
                            also it helps doctors to be in touch with their patients.
                            <a href="http://fast-oasis-24569.herokuapp.com/" target="_blank"><i class="fa fa-share-square"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Skills -->
<div class="container-fluid bg-white">
    <div class="section-content">
        <h2>Skils</h2>
        <div class="row">
            <div class="col-md-3">
                <h6>HTML/CSS</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>Javascript</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>MySql</h6>
                <div class="progress">
                    <div class="progress-bar" role="pogressbar" style="width: 60%" aria-valuenow="60" area-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>Github</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>MS Suite</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>Python</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>Java</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>MongoDB</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-md-3">
                <h6>PHP</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Social 
<div class="section">
    <div class="section-content">
        <div class="title">
            <h3>Social</h3>
            <br>
            <span><i class="fa fa-share-square fa-4x"></i></span>
        </div>
        <div class="content">
            <div class="dual-col social">
                <span><a href="https://www.facebook.com/aolivos1" target="_blank"><i class="fab fa-facebook-square fa-4x"></i></a></span>
                <span><a href="https://plus.google.com/+adanolivos" target="_blank"><i class="fab fa-google-plus-square fa-4x"></i></a></span>
                <span><a href="https://twitter.com/olivosAdan" target="_blank"><i class="fab fa-twitter-square fa-4x"></i></a></span>
                <span><a href="https://linkedin.com/in/adan-olivos-57189448" target="_blank"><i class="fab fa-linkedin fa-4x"></i></a></span>
            </div>
        </div>
    </div>
</div>
-->
@endsection