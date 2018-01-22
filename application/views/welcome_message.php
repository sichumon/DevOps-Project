<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Tou Tong Vang </title>
    <link rel="stylesheet" href="styles/main.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo"/>
  </head>

  <body>
    <main class="overflow--auto">
      <h1 class="color--skyBlue section__heading--largest">
        <!--Your name goes here -->
        Tou Tong Vang
      </h1>

      <ul class="section--social">

        <!--Links to relevant professional social media & resume -->
        <!-- See: http://fontawesome.io/icons/#brand for more -->

        <!-- Link to Linked In profile -->
        <li class="socialWrapper">
          <a class="color--skyBlue social"
             title="Facebook Profile"
             target="_blank"
             href="https://www.facebook.com/toutongvang22">
            <i class="fa fa-facebook"></i>
          </a>
        </li>

        <!-- Link to Linked In profile -->
        <li class="socialWrapper">
          <a class="color--skyBlue social"
             title="LinkedIn Profile"
             target="_blank"
             href="https://www.linkedin.com/in/tou-vang-704428122/">
            <i class="fa fa-linkedin"></i>
          </a>
        </li>

        <!-- Link to GitHub profile -->
        <li class="socialWrapper color--skyBlue">
          <a class="social color--skyBlue"
             title="GitHub Profile"
             target="_blank"
             href="https://github.com/ttvang22">
            <i class="fa fa-github"></i>
          </a>
        </li>

        <!-- Link to resume, probably a .pdf -->
        <li class="socialWrapper">
          <a class="social color--skyBlue"
             title="Resume"
             href="TouVangResume.pdf">
            <i class="fa fa-file-text"></i>
          </a>
        </li>
      </ul>
    </main>

    <section class="background--skyBlue section">
      <h2 class="color--cloud margin--none section__text--centered">
        Welcome To My ServerlessPortfolio
      </h2>
    </section>

    <section class="section section--alignCentered section--description">
      <div class="section__exampleWrapper">
        <div class="section__example">
          <img alt="example screenshot of a project involving code"
               class="section__exampleImage"
               src="images/Family.jpg"/>
          <dl class="color--cloud">
            <dt class="section__exampleTitle section__text--centered">
              Family
            </dt>
            <dd></dd>
          </dl>
        </div>
      </div>

      <div class="section__exampleWrapper">
        <div class="section__example">
          <img alt="example screenshot of a project involving chemistry"
               class="section__exampleImage"
               src="images/Fishing.jpg"/>
          <dl class="color--cloud">
            <dt class="section__exampleTitle section__text--centered ">
              Fishing
            </dt>
            <dd></dd>
          </dl>
        </div>
      </div>

      <div class="section__exampleWrapper">
        <div class="section__example">
          <img alt="example screenshot of a project involving cats"
               class="section__exampleImage"
               src="images/OfficeDesk.jpg"/>
          <dl class="color--cloud">
            <dt class="section__exampleTitle section__text--centered">
              Work
            </dt>
            <dd></dd>
          </dl>
        </div>
      </div>
    </section>

    <section class="background--skyBlue section">
      <h2 class="color--cloud margin--none section__text--centered">
        About Me
      </h2>
    </section>

    <section class="section section--alignCentered section--description">
      <p class="color--darkgrey section__description">
        Hi Name Is Tou Tong Vang. This is my profolio that display my experience
        in HTML, CSS, JAVA and Serverless Backend.
      </p>

    <div class="background--skyBlue modal--closed">
      <span class="color--cloud modal__closeButton">
        <i class="fa fa-window-close-o"></i>
      </span>
      <img alt="example screenshot of a project involving code"
           class="modal__image"
           src="images/example1.png"/>
      <div class="color--cloud modal__text">
        <h2 class="modal__title">
          Work
        </h2>
        <a class="color--skyBlue modal__link"
           href="#">
          Check it out
        </a>
        <p class="modal__description">
          A long description of the work in question.
        </p>
      </div>
    </div>

  </body>
</html>
