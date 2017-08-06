<!DOCTYPE html>
<html lang="en">
<?php require 'php/headelements.php'; ?>
<body>
<?php require 'php/navbar.php'; ?>
<?php include_once('php/analyticstracking.php'); ?>
<div class="section no-pad" id="index-banner">
    <div class="row">
        <div class="col s12 m6 l4 xl3">
            <div class="card sticky-action z-depth-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="resources/img/tree.jpeg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Angena<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Angena<i class="material-icons right">more_vert</i></span>
                    <p>
                        Record and view your family history utilizing this free, user-friendly genealogy program.
                        This free open source software utilizes a Qt frontend and C++ backend to deliver the best
                        performance.
                        Although this program will primarily support its proprietary format to store the most
                        information, it will also support GEDCOM X for compatibility across other genealogy programs.
                    </p>
                </div>
                <div class="card-action">
                    <a href="https://github.com/Michaelis105/Angena">Save your family history!</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4 xl3">
            <div class="card sticky-action z-depth-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="resources/img/video.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Vidngo<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Vidngo<i class="material-icons right">more_vert</i></span>
                    <p>
                        Download your favourite online videos using this lightweight, cross-platform downloader.
                        This project is inspired by other products such as FreeMake Video Converter and VideoGet.
                        Integrating a GTK+3 frontend with a Go backend delivers the expected modern feel and performance of
                        today's desktop applications when downloading videos.
                    </p>
                </div>
                <div class="card-action">
                    <a href="https://github.com/Michaelis105/Vidngo">Download Videos!</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4 xl3">
            <div class="card sticky-action z-depth-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="resources/img/orig-combine-report.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">OWASP-DC-XMLP<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">OWASP-DC-XMLP<i class="material-icons right">more_vert</i></span>
                    <p>
                        Combine all of your OWASP Dependency Check reports into one document using this parser.
                        The current OWASP Dependency Check software does an amazing job identifying publicly disclosed
                        vulnerabilities with project dependencies but outputs individual reports for every subproject
                        leading to high storage consumption.
                        OWASP-DC-XMLP allows the user to combine the output XML into a customizable single CSV or HTML
                        report.
                        This project will be free open source software utilizing Java for parsing OWASP-DC XMLs and jinja
                        for creating the HTML reports.
                    </p>
                </div>
                <div class="card-action">
                    <a href="https://github.com/Michaelis105/owasp-dc-xml-report-parser">Gather the reports!</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l4 xl3">
            <div class="card sticky-action z-depth-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="resources/img/soldier.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Untitled Game<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Untitled Game<i class="material-icons right">more_vert</i></span>
                    <p>
                        Unity game based on urban warfare tactics inspired by Full Spectrum Warrior game.
                        I am currently experimenting with Unity, C#, Boo, and general game design best practices so it will
                        be awhile before I get to this project.
                        But I have so many ideas for this game and I'm excited for when the time comes to starting coding.
                    </p>
                </div>
                <div class="card-action">
                    <a href="">Link coming soon!</a>
                </div>
            </div>
        </div>
    </div>
    <a href="resume.php" class="waves-effect waves-light btn indigo right z-depth-3"><i class="material-icons right">play_arrow</i>View
        my resume</a>
</div>
<?php require 'php/modal.php'; ?>

<?php require 'php/footer.php'; ?>
<?php require 'php/jsimports.php'; ?>
</body>
