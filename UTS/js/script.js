function myComment() {
    var element = document.getElementById("comment-out");
    var comment = document.getElementById("comment-in");
    var fadeEffect = setInterval(function () {
        if (!comment.style.opacity) {
            comment.style.opacity = 1;
        }
        if (comment.style.opacity > 0) {
            comment.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 15);

    element.classList.remove("invisible");
    comment.addEventListener('click', fadeOutEffect);
    element.parentNode.removeChild(comment);
 }
 function LoadMore(){
     var load = document.getElementById("#load-more");
    document.querySelector('#load-more').insertAdjacentHTML(
        'afterbegin',
        `<div id="section-6" class="ori-container text-left">
        <div class="p-5 row row-cols-1 row-cols-md-2" id="gallery">
          <div class="col mb-4 pr-4">
            <div>
              <img src="img/image-2.png" class="card-img-top" alt="...">
              <div class="pt-4">
                <h5 class="card-title pb-2 font-u-light">LIFESTYLE</h5>
                <p class="card-title h2">More than just a music festival</p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, autem tempore. Voluptatum ad dolor et alias id est repellat numquam, non delectus, sed modi totam dolorem incidunt dolore molestiae laborum.</p>
              </div>
            </div>
          </div>
          <div class="col mb-4 pl-4">
            <div>
              <img src="img/image-3.png" class="card-img-top" alt="...">
              <div class="pt-4">
                <h5 class="card-title pb-2 font-u-light">LIFESTYLE</h5>
                <p class="card-title h2">Life tastes better with coffee</p>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, autem tempore. Voluptatum ad dolor et alias id est repellat numquam, non delectus, sed modi totam dolorem incidunt dolore molestiae laborum.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Section 6 -->

        <!-- Start Section 7 -->
        <div id="section-7">
          <div class="px-5 row row-cols-1 row-cols-md-2" id="gallery">
            <div class="col mb-4 pr-4">
              <div>
                <img src="img/image-2.png" class="card-img-top" alt="...">
                <div class="pt-4">
                  <h5 class="card-title pb-2 font-u-light">LIFESTYLE</h5>
                  <p class="card-title h2">More than just a music festival</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, autem tempore. Voluptatum ad dolor et alias id est repellat numquam, non delectus, sed modi totam dolorem incidunt dolore molestiae laborum.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4 pl-4">
              <div>
                <img src="img/image-3.png" class="card-img-top" alt="...">
                <div class="pt-4">
                  <h5 class="card-title pb-2 font-u-light">LIFESTYLE</h5>
                  <p class="card-title h2">Life tastes better with coffee</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, autem tempore. Voluptatum ad dolor et alias id est repellat numquam, non delectus, sed modi totam dolorem incidunt dolore molestiae laborum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- End Section 7 -->

      <!-- End Additional Content -->
  </div>`      
      )
      load.parentNode.removeChild(load);
 }