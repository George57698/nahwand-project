@extends('layouts.app')

@section('content')
 <!-- start single teacher -->
<div class="single-teacher pt-5">
 <div class="container">
  <div class="row">
    <div class="col-md-4">
     <img src="{{asset('img/Rectangle_26.png') }}" class='single-teacher-photo' alt="">
    </div>
    <div class="col-md-8 teacher-info">
      <h2>teacher name : george</h2>
      <p>
       level : pro  
      </p>
      <p class='w-75'>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel delectus in, vero hic labore expedita culpa enim magnam officia rem. Reiciendis aliquid officiis id, enim saepe sequi laudantium. Quas, ratione.
      </p>
      <button class='btn login-btn' ><a href='/add-course'>Add course</a></button>
    </div>
  </div>
  <div class="row">
   <div class="col-md-12 my-5 color-white">
    <h2>teacher carrer :</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis illo, harum unde earum assumenda quidem. Dignissimos deserunt, sapiente ea molestias soluta est aperiam ipsum exercitationem libero. Repudiandae incidunt voluptatum obcaecati fuga, cum vero quaerat facere sapiente nam aliquid rerum iusto optio ad nostrum mollitia cumque doloremque beatae corrupti ipsum, iure natus architecto quia. Quae eveniet voluptate quia maiores facere repellendus quas, nisi ducimus nihil consequuntur maxime tempore animi praesentium nesciunt. Eligendi ipsa qui culpa? Quos inventore sed maxime distinctio animi sunt illo ipsa architecto ex repudiandae laborum, velit enim exercitationem. Doloremque veniam adipisci accusantium voluptatibus architecto sint perferendis laborum incidunt maxime consequatur tenetur, cum, magni dolore. Ullam consequuntur magnam, excepturi, neque enim molestiae nemo, libero accusamus architecto saepe exercitationem vero? Vero distinctio suscipit minima ullam eius praesentium impedit quas voluptates. Debitis animi officia enim repellendus illum eius, quaerat beatae amet voluptatem cupiditate eaque excepturi modi doloribus asperiores eligendi molestiae suscipit optio corporis laboriosam quisquam voluptates blanditiis ex? In nemo voluptas ducimus. Vel inventore omnis debitis, sit corrupti doloremque praesentium porro ipsam autem. Distinctio obcaecati repellendus incidunt fugit, ipsam labore cumque facilis quae id sunt minus officiis non in, iusto quis voluptates consequatur. Nobis distinctio, rem nihil incidunt ad officia odio facere velit illo id reprehenderit sunt voluptates dolore molestias officiis recusandae delectus vero esse doloremque, veniam ab. Obcaecati inventore maxime, facilis autem velit nulla suscipit pariatur at, reiciendis nam temporibus sequi neque officiis repudiandae esse unde necessitatibus cumque? Dolores quod cum porro recusandae doloribus neque harum a. Ipsa quas ea, optio error necessitatibus illum voluptas iusto, molestias amet quia, nesciunt tenetur asperiores! Commodi molestias porro eos odio hic voluptas rerum error nihil dolor, fuga magnam beatae tempore asperiores eaque facere nesciunt ea cumque impedit neque. Error dicta praesentium quis nemo ad aspernatur ducimus, exercitationem optio iusto ab repellendus vel et reiciendis corporis id harum! Porro possimus sit placeat facilis quae? Fuga officia ab aliquam provident animi enim voluptatum recusandae. Nobis provident libero earum sint accusamus dignissimos aspernatur similique ea veritatis ratione, ipsum maxime esse itaque eveniet, quasi hic inventore veniam officiis quam, dolore voluptates eaque vero? Eum incidunt soluta, sint, voluptate alias molestias tenetur libero consequatur in itaque pariatur, placeat ea aspernatur. Quas consequatur quibusdam repellat sed sint nostrum earum explicabo, quidem dignissimos sapiente autem id ex illum tenetur voluptatum repellendus facilis reprehenderit non, qui at deleniti porro. Repellendus accusamus architecto qui libero eius et aliquid ratione, veniam nihil exercitationem. Asperiores dolorum voluptates quaerat quisquam quibusdam, ipsam sequi eveniet obcaecati? Sequi id porro dignissimos aliquid error, laboriosam odio vitae dolorem modi quam placeat officiis? Ipsam nisi obcaecati, cupiditate ipsum perspiciatis officia, similique minima voluptate tempora, reiciendis distinctio? Repellat maxime non nemo consectetur consequatur explicabo nobis illum impedit necessitatibus eveniet repudiandae eligendi optio fuga, dolorum at ratione distinctio consequuntur sed omnis, temporibus ducimus neque. Deserunt dolorem aperiam ipsum illo adipisci soluta repellat quaerat sunt non numquam ea, nostrum assumenda deleniti tenetur libero quasi! Expedita exercitationem deleniti et eum ducimus, natus voluptates reprehenderit id explicabo optio ratione quas quod vitae adipisci consequatur!</p>
   </div>
  </div>
 </div>
</div>
 <!-- end single teacher -->

    <!-- happy student start -->
    <div class="happy-student" style="background-image: url({{ asset('img/vocal.png') }});" >
        <div class="vocal-cover py-5">   
            <div class="container">
                <div class="row">
                    <h4 class='text-center'>Our Happy Student</h4>
                    <div class="col-md-4 my-5">
                        <div class="review-card p-5 ">
                            <p class='color-white'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nihil id soluta animi ipsam dolor odit exercitationem eveniet et. Animi.</p>
                        </div>
                        <div class="reviw-image">
                            <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4'>Lorem</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4 my-5">
                        <div class="review-card p-5 ">
                            <p class='color-white'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nihil id soluta animi ipsam dolor odit exercitationem eveniet et. Animi.</p>
                        </div>
                        <div class="reviw-image">
                            <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4'>Lorem</span>
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4 my-5">
                        <div class="review-card p-5 ">
                            <p class='color-white'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nihil id soluta animi ipsam dolor odit exercitationem eveniet et. Animi.</p>
                        </div>
                        <div class="reviw-image">
                            <img src={{ asset('img/Rectangle_28.png') }} alt="">
                            <p class='color-white my-1 student-name'>Omar Bashir
                                <br><span class='student-level mx-4'>Lorem</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- happy student end -->
 <!-- start courses -->
    <div class="courses py-5">
      <div class="container">
        <div class="row">
         <h4 class='text-center'>Other Teacher </h4>
          <div class="col-md-4">
            <div class="teacher-card text-center my-5 mx-5">
            <img src={{ asset('img/Rectangle_36.png') }} alt="">
            <div class="holder">
             <p>Alf Lela</p>
            </div>
            <div class="course-info py-2">
             <p>
              <span class='d-block'>name : Tarek</span>
              <span class='d-block'>level : pro</span>
              <span class='d-block'>numbre of courses : 24</span>
              <button class="login-btn">
               See more
              </button>
             </p>
            </div>
           </div>
          </div> 
          
          <div class="col-md-4">
            <div class="teacher-card text-center my-5 mx-5">
            <img src={{ asset('img/Rectangle_36.png') }} alt="">
            <div class="holder">
             <p>Alf Lela</p>
            </div>
            <div class="course-info py-2">
             <p>
              <span class='d-block'>name : Tarek</span>
              <span class='d-block'>level : pro</span>
              <span class='d-block'>numbre of courses : 24</span>
              <button class="login-btn" style="margin: 5px 0 !important;">
               See more
              </button>
             </p>
            </div>
           </div>
          </div> 

          <div class="col-md-4">
            <div class="teacher-card text-center my-5 mx-5">
            <img src={{ asset('img/Rectangle_36.png') }} alt="">
            <div class="holder">
             <p>Alf Lela</p>
            </div>
            <div class="course-info py-2">
             <p>
              <span class='d-block'>name : Tarek</span>
              <span class='d-block'>level : pro</span>
              <span class='d-block'>numbre of courses : 24</span>
              <button class="login-btn">
               See more
              </button>
             </p>
            </div>
           </div>
          </div> 
        </div>
      </div>
     </div>
     <!-- end teacher -->
     <!-- start footer -->
            <footer >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ">
                            <div class="lo"><img src="images/logo.png" alt="logo"></div>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices..</p>

                        </div>
                        <div class="col-md-6 col-lg-4 edit">
                            <div class="section-title">
                                <div class="dash"></div>
                                <h5>Treding course</h5>
                            </div>
                            <div class="trending-item">
                                <div class="row">
                                    <div class="ti-pic col-12 col-lg-6">
                                        <img src="images/trending/editor-1.jpg" alt="">
                                    </div>
                                    <div class="ti-text col-12 col-lg-6">
                                        <h6><a href="#">A MONSTER PROM POSTER GOT HIJACKED FOR A PAPA ROACH CONCERT...</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-clock"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="trending-item">
                                <div class="row">
                                    <div class="ti-pic col-12 col-lg-6">
                                        <img src="images/trending/editor-2.jpg" alt="">
                                    </div>
                                    <div class="ti-text col-12 col-lg-6">
                                        <h6><a href="#">A MONSTER PROM POSTER GOT HIJACKED FOR A PAPA ROACH CONCERT...</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-clock"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4 tag">
                            <div class="section-title">
                                <div class="dash"></div>
                                <h5>Treding Note</h5>
                            </div>
                            <div class="tag-list">
                                <a href="#"><span>um kalthom</span></a>
                                <a href="#"><span>Abd alhalim</span></a>
                                <a href="#"><span>Warda</span></a>
                                <a href="#"><span>naser</span></a>
                                <a href="#"><span>george</span></a>
                            </div>
                    </div>
                </div>
                </div>
                <p class="lead text-center">Designed by geogre</p>
            </footer>
      <!-- end footer -->

@endsection
