<?php
require_once '../controller/connectiondb.php';
$sql = "update access_logs set counter = counter +1 where id=1";
mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Covid and reasons to protect people from covid, and how to solve">
    <meta name="keywords" content="Covid, corona, virus, virus corona">
    <title>Vaccination</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
  <div class="main-container">
               <!-- Render header-->
              <?php 
              include '../Layouts/header.php';
              ?>

               <!-- Render main -->
               <main>
                <section class="schedule">
                    <div class="schedule__title">
                        <figure class="schedule__title--clock">
                            <img src="../assets/icons/clock.svg" alt="clock">
                        </figure>
                        <h5 class="schedule__title--content">Schedule your Vaccination</h5>
                    </div>
                    <div class="schedule__image">
                        <div class="schedule__image--icon">
                            <div class="child">
                              <figure class="child__img">
                                  <img src="../assets/icons/mapPin.svg" alt="location">
                              </figure>
                              <div class="child__content">
                                  <span class="child__content-first">Location</span>
                                  <span class="child__content-secondary">Ikeja Lagos, Nigeria</span>
                              </div>
                          </div>
                          <div class="child">
                            <figure class="child__img">
                                <img src="../assets/icons/calendar.svg" alt="calendar">
                            </figure>
                            <div class="child__content">
                                <span class="child__content-first">Date</span>
                                <span class="child__content-secondary">29 February, 2022</span>
                            </div>
                        </div>
                        <div class="child">
                          <figure class="child__img">
                              <img src="../assets/icons/shield.svg" alt="shield">
                          </figure>
                          <div class="child__content">
                              <span class="child__content-first">Vaccine Type</span>
                              <span class="child__content-secondary">Moderna</span>
                          </div>
                      </div>

                            <button class="submit">Submit</button>
                        </div>
                    </div>
                </section>
                <section class="banner">
                    <figure class="banner-child">
                      <img src="../assets/icons/moderna.svg" alt="item" class="banner-child-item">
                  </figure>
                  <figure class="banner-child">
                    <img src="../assets/icons/Pfizer.svg" alt="item" class="banner-child-item">
                </figure>
                <figure class="banner-child">
                  <img src="../assets/icons/astrazeneca.svg" alt="item" class="banner-child-item">
              </figure>
              <figure class="banner-child">
                <img src="../assets/icons/sinovac.svg" alt="item" class="banner-child-item">
            </figure>
                </section>
                <section class="result" id="result">
                    <p class="result__title">
                        Check your COVID-19 result on our Database
                    </p>
                    <div class="result__form">
                        <form action="../controller/vaccinecontroller.php" method="post" class="result__form--input">
                            <input class="top" type="text" placeholder="Okeowo" name="hoten">
                            <input class="bottom" type="text" placeholder="NIK Number" name="phone">
                            <button class="button" style="font-size: 32px;color:white">
                                    Check
                              
                            </button>
                        </form>
                            <p class="result__form--question">
                                Need a certificate for your COVID-19 result? 
                            
                           
                                Please click 
                                <a class="text" href="#">here</a>
                            </p>
                    </div>
                </section>
                <section class="reason" >
                    <div class="reason__content">
                      <p class="reason__content-first">Why get vaccinated
                        today?</p>
                        <p class="reason__content-second">
                            <span>
                                Magna adipiscing at elit at ornare lectus nibh lorem. 
                            </span>
                            <span>
                                Ac, sed ac lorem pellentesque vestibulum risus matti. 
                            </span>
                            <span>
                                In molestie condimentum malesuada non.
                            </span>
                        </p>
                    </div>
                    <div class="reason__card">
                        <article class="reason__card-big">
                            <figure class="reason__card-big__image">
                                <img src="../assets/icons/shield.svg" alt="shield">
                            </figure>
                            <div class="reason__card-big__content">
                                <p class="title-first">Protects your immune 
                                    system against viruses</p>
                                <p class="title-second">
                                    <span>
                                        Velit ut consectetur mauris, orci amet, faucibus. 
                                    </span>
                                    <span>
                                        Sit turpis fringilla ipsum pretium, dictum. Dolor eget vel nulla lorem ac.</p>
                                    </span>
                            </div>
                            <a href="#" class="reason__card-big__link">Read More <figure><img src="../assets/icons/arrowRight.svg" alt="arrow"></figure></a>
                        </article>
                        <div class="reason__card-child">
                           
                            <article class="cardrs">
                              <figure class="cardrs__image">
                                  <img src="../assets/icons/people.svg" alt="icon">
                              </figure>      
                              <p class="cardrs__text">
                                Minimize the spread of the Virus
                      
                              </p>
                                      <a href="#" class="cardrs__link">Read More <figure><img src="../assets/icons/arrowRightWhite.svg" alt="arrow"></figure></a>
                          </article>
                          <article class="cardrs">
                            <figure class="cardrs__image">
                                <img src="../assets/icons/key.svg" alt="icon">
                            </figure>      
                            <p class="cardrs__text">
                              Proctected yourself
                    
                            </p>
                                    <a href="#" class="cardrs__link">Read More <figure><img src="../assets/icons/arrowRightWhite.svg" alt="arrow"></figure></a>
                        </article>

                        </div>
                    </div>
                </section>
                <section class="information" id="schedule">
                    <p class="information__title">
                       
                            Get your vaccine registration today
                       
                    </p>
                    <div class="information__image">
                        <figure>
                            <img src="../assets/images/group.png" alt="vcc">
                        </figure>
                        <button class="information__image-button">Verify Status</button>
                    </div>
                     <form action="" class="information__form">
                        <p class="information__form-first--text">Patient's Full Name</p>
                        <input type="text" class="information__form-input" placeholder="Full name" name="">
                        <p class="information__form-first--text">Mobile Number</p>
                        <p class="information__form-second--text">Notifications for appointment and reminders will be sent to this provided number</p>
                        <div class="information__form-group">
                            <div class="information__form-group-input">
                                <figure class="flag">
                                    <img src="../assets/icons/flag.svg" alt="flag">
                                </figure>
                                <figure class="arrow">
                                    <img src="../assets/icons/chevron-down.svg" alt="arrow">
                                </figure>
                                <input type="text" class="input-phonenum" placeholder="Phone number">
                            </div>
                            <button class="buttonvrf">Verify</button>
                        </div>
                       <button class="btn-submit" ><a href="../controller/schedule.php" style="text-decoration:none">Submit</a></button>
                       <div class="information__form__ques">
                        <a href="#" class="ques ques-first">Already registered?</a>
                        <a href="#" class="ques ques-second">Check your status</a>
                       </div>
                    </form>
                </section>
                <section class="behavior">
                    <div class="behavior__content">
                        <p class="behavior__content__first-title">Covid-19 Prevention</p>
                        <p class="behavior__content__main-title"><span>COVID-19</span> Symptoms</p>
                        <p class="behavior__content__second-title"> 
                            <span>
                                Adipiscing nec etiam tortor elit quisque.
                            </span>
                            <span>
                                Arcu aliquet convallis aenean eu velit.
                            </span>
                            <span>
                                Mi vestibulum, ullamcorper venenatis imperdiet augue arcu donec neque.</p>
                            </span>
                    </div>
                    <div class="virusBehaviorImage">
                        <figure class="imageperson--fg">
                            <img src="../assets/images/headache.webp" alt="Person" class="imageperson--svg">
                        </figure>
                        <div class="virusdescription">
                            <div class="grid">
                               <div class="divvirus">
                                <div class="virus">
                                  <figure>
                                      <img src="../assets/icons/coronavirus.svg" alt="">
                                  </figure>
                                  <p class="virus__content">High Fever</p>
                              </div>
                              <div class="virus">
                                <figure>
                                    <img src="../assets/icons/coronavirus.svg" alt="">
                                </figure>
                                <p class="virus__content">Loss of sense of taste</p>
                            </div>
                            </div>
                            <div class="divvirus">
                              <div class="virus">
                                <figure>
                                    <img src="../assets/icons/coronavirus.svg" alt="">
                                </figure>
                                <p class="virus__content">Loss sense of smell</p>
                            </div>
                            <div class="virus">
                              <figure>
                                  <img src="../assets/icons/coronavirus.svg" alt="">
                              </figure>
                              <p class="virus__content">Difficulty Breathing</p>
                          </div>
                          </div>
                          <div class="divvirus">
                            <div class="virus">
                              <figure>
                                  <img src="../assets/icons/coronavirus.svg" alt="">
                              </figure>
                              <p class="virus__content">Dry cough</p>
                          </div>
                          <div class="virus">
                            <figure>
                                <img src="../assets/icons/coronavirus.svg" alt="">
                            </figure>
                            <p class="virus__content">Sore Throat</p>
                        </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="patient">
                    <div class="patient__content">
                        <p class="patient__content-fistline">FEEDBACK</p>
                        <p class="patient__content-secondline">What our Patients Think</p>
                        <p class="patient__content-thirdline">
                            <span>
                                Adipiscing nec etiam tortor elit quisque.
                            </span>
                            <span>
                            Arcu aliquet convallis aenean eu velit.
                            </span>
                            <span>
                                Mi vestibulum, ullamcorper venenatis imperdiet augue arcu donec neque.
                            </span>
                        </p>
                    </div>
                    <div class="patient__image">
                        <div class="patient__image__card">
                            
                            <article class="cardinfor">
                              <div class="cardhtml">
                                  <div class="cardhtml__information">
                                      <figure class="cardhtml__information-avt">
                                          <img src="../assets/icons/personF1.svg" alt="person">
                                      </figure>
                                      <div class="cardhtml__information__text">
                                          <p class="cardhtml__information__text-fistline">Oyindamola Maja</p>
                                          <p class="cardhtml__information__text-secondline">Badagry, Lagos</p>
                                      </div>
                                  </div>
                                  <div class="cardhtml__comment">
                                      <p class="cardhtml__comment-title">
                                        "Been stressing about a close centre to get the
                                          <span>covid-19</span>
                                          vaccine, until i tried Vaccination.ng"
                                      </p>
                                  </div>
                              </div>
                              </article>
                              <article class="cardinfor">
                                <div class="cardhtml">
                                    <div class="cardhtml__information">
                                        <figure class="cardhtml__information-avt">
                                            <img src="../assets/icons/personF2.svg" alt="person">
                                        </figure>
                                        <div class="cardhtml__information__text">
                                            <p class="cardhtml__information__text-fistline">Okeowo Lekan</p>
                                            <p class="cardhtml__information__text-secondline">Ikeja, Lagos</p>
                                        </div>
                                    </div>
                                    <div class="cardhtml__comment">
                                        <p class="cardhtml__comment-title">
                                          "Got my vaccine very close to my house.
                                            <span></span>
                                            Was very easy scheduling an appointment."
                                        </p>
                                    </div>
                                </div>
                                </article>
                                <article class="cardinfor">
                                  <div class="cardhtml">
                                      <div class="cardhtml__information">
                                          <figure class="cardhtml__information-avt">
                                              <img src="../assets/icons/personF3.svg" alt="person">
                                          </figure>
                                          <div class="cardhtml__information__text">
                                              <p class="cardhtml__information__text-fistline">Kafaru Temitope</p>
                                              <p class="cardhtml__information__text-secondline">Obanikoro, Lagos</p>
                                          </div>
                                      </div>
                                      <div class="cardhtml__comment">
                                          <p class="cardhtml__comment-title">
                                            "Been stressing about a close centre to get the
                                              <span>covid-19</span>
                                              vaccine, until i tried Vaccination.ng"
                                          </p>
                                      </div>
                                  </div>
                                  </article>


                        </div>
                    </div>
                </section>
               
            </main>

              <!-- Render footer-->
             <?php 

             include '../Layouts/footer.php';
             ?>
  </div>  
</body>
</html>