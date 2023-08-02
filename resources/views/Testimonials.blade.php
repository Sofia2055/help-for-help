<x-body>
    @section('title', 'Testimonials')
    <div class="container">
        <div class="row">
            <h1>Testimonials</h1>
            <div class="testimonials-wrapper" id="testimonialsWrapper">
                <div class="testimonial-card">
                  <p>The site is very important, the truth is that I love it too much.</p>
                  <p><strong>Kenny Cornelio</strong></p>
                </div>

                <div class="testimonial-card">
                  <p>H4H is an application that will help many people with limited resources.</p>
                  <p><strong>Eunice Olivares</strong></p>
                </div>

                <!-- Agrega más tarjetas de testimonios aquí pero mas tardeeee  -->

                <div class="testimonial-card">
                  <p>I love it very much is an application with many good points and there are many things to improve the truth is well designed.</p>
                  <p><strong>Fatima Vasquez</strong></p>
                </div>
              </div>

              <div class="add-comment">
                <h3>Add Comment</h3>
                <input type="text" id="user-name" placeholder="User Name">
                <textarea id="new-comment" placeholder="Write your comment here"></textarea>
                <button onclick="addComment()">Upload Comment</button>
              </div>

              <style>
                /* Estilos para las tarjetas de testimonios */
                .testimonials-wrapper {
                  display: flex;
                  flex-wrap: wrap;
                  gap: 20px;
                  padding: 20px;
                }

                .testimonial-card {
                  width: 300px;
                  background-color: #f0f0f0;
                  padding: 10px;
                  border-radius: 5px;
                  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                .testimonial-card h2 {
                  font-size: 18px;
                  margin-bottom: 10px;
                }

                .testimonial-card p {
                  font-size: 14px;
                  margin-bottom: 5px;
                }

                .testimonial-card strong {
                  font-weight: bold;
                  color: black; /* esto paora el nombre de usuariooo */
                }

                .add-comment {
                  width: 100%;
                  background-color: #f0f0f0;
                  padding: 10px;
                  border-radius: 5px;
                  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                  margin-top: 20px;
                }

                .add-comment h3 {
                  margin-bottom: 10px;
                }

                .add-comment input[type="text"],
                .add-comment textarea {
                  width: 100%;
                  margin-bottom: 10px;
                }

                .add-comment label {
                  display: block;
                  margin-bottom: 5px;
                }

                .add-comment button {
                  background-color: #41c1ba;
                  color: #ffffff;
                  border: none;
                  padding: 10px;
                  border-radius: 5px;
                  cursor: pointer;
                }
              </style>



<script>

    function addComment() {
      const userName = document.getElementById("user-name").value;
      const newComment = document.getElementById("new-comment").value;
      const ratingValue = getSelectedRating();

      if (userName.trim() === "" || newComment.trim() === "") {
        alert("Por favor, ingresa el nombre del usuario y su comentario.");
        return;
      }

      const testimonialsWrapper = document.getElementById("testimonialsWrapper");
      const commentCard = document.createElement("div");
      commentCard.classList.add("testimonial-card");

      const rating = document.createElement("div");
      rating.classList.add("rating");
      for (let i = 1; i <= 5; i++) {
        const star = document.createElement("span");
        star.classList.add("star");
        star.setAttribute("data-star-value", i);
        if (i <= ratingValue) star.classList.add("selected");
        rating.appendChild(star);
      }

      const testimonialText = document.createElement("p");
      testimonialText.classList.add("testimonial-text");
      testimonialText.textContent = newComment;

      const testimonialAuthor = document.createElement("p");
      testimonialAuthor.classList.add("testimonial-author");
      testimonialAuthor.innerHTML = "<strong>" + userName + "</strong>";

      commentCard.appendChild(rating);
      commentCard.appendChild(testimonialText);
      commentCard.appendChild(testimonialAuthor);

      testimonialsWrapper.appendChild(commentCard);

      document.getElementById("user-name").value = "";
      document.getElementById("new-comment").value = "";
      clearSelectedRating();
    }

  function getSelectedRating() {
    const stars = document.getElementsByClassName("star");
    let ratingValue = 0;
    for (let i = 0; i < stars.length; i++) {
    if (stars[i].classList.contains("selected")) {
        ratingValue = parseInt(stars[i].getAttribute("data-star-value"));
    break;
      }
    }
    return ratingValue;
  }

  function clearSelectedRating() {
    const stars = document.getElementsByClassName("star");
    for (let i = 0; i < stars.length; i++) {
      stars[i].classList.remove("selected");
    }
  }
  function setupRatingStars() {
    const ratingStars = document.getElementsByClassName("star");

    for (let i = 0; i < ratingStars.length; i++) {
      ratingStars[i].addEventListener("click", function() {
        const clickedRating = parseInt(this.getAttribute("data-star-value"));
        for (let j = 0; j < ratingStars.length; j++) {
          const starValue = parseInt(ratingStars[j].getAttribute("data-star-value"));
          if (starValue <= clickedRating) {
            ratingStars[j].classList.add("selected");
          } else {
            ratingStars[j].classList.remove("selected");
          }
        }
      });
    }
  }
  setupRatingStars();

</script>
</x-body>

