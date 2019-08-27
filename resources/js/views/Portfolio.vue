<template>
  <div class="container">
    <div class="m-container">
      <div class="portfolio-item" @click="omModalOpen">
        <div class="portfolio-item-img-container">
          <img src="/images/om_meatsbackground.png" class="portfolio-item-image" alt />
        </div>
        <div class="heading-container">
          <h2 class="heading">O'Mahony Meats Ltd.</h2>
        </div>
        <div class="link-container">
          <a href="#" class="link om_link">More Info</a>
        </div>
      </div>
      <div class="portfolio-item" @click="c4uModalOpen">
        <div class="portfolio-item-img-container">
          <img src="/images/clothingforyoubackground.png" class="portfolio-item-image" alt />
        </div>
        <div class="heading-container">
          <h2 class="heading">Clothing4U</h2>
        </div>
        <div class="link-container">
          <a href="#" class="link c4u_link">More Info</a>
        </div>
      </div>
    </div>
    <div class="omModalContainer" style="display:none">
      <div class="omModal">
        <div class="omModal-top-section">
          <div class="omImage-container">
            <img src="/images/om_meatsbackground.png" class="image" alt />
          </div>
          <div class="om-modal-right">
            <div class="om-about-container">
              <h2 class="about-title">About</h2>
              <p
                class="about-details"
              >O'Mahony Meats are an SME based in Dublin. They supply meat to both the catering trade and the general public. They sell over 600 products. They customer-driven products</p>
            </div>
            <div class="om-project-container">
              <h2 class="project-title">The Project</h2>
              <p
                class="project-details"
              >Rocket.Chip Web Solutions worked closely with O'Mahony Meats to develop a custom web solution to suit their style, brand identity and specific requirements.</p>
              <p
                class="project-details"
              >The website features a unique navigation and page structure, which was designed in conjuction with the client. It aslo features a custom back-end which enables the client to post employment opportunities, special offers, recipes and more.</p>
            </div>
          </div>
        </div>
        <div class="om-modal-link-container">
          <a href="https://www.omahonymeats.ie" target="_blank" class="om-modal-link">Visit Site</a>
        </div>

        <div
          class="omModal-close"
          @click="omModalClose()"
          @mouseenter="rotateForward()"
          @mouseleave="rotateBackwards()"
        >
          <i class="fal fa-times-circle omModal-close-button"></i>
        </div>
      </div>
    </div>
    <div class="c4uModalContainer" style="display:none">
      <div class="c4uModal">
        <div class="c4uImage-container">
          <img src="/images/om_meatsbackground.png" class="image" alt />
        </div>
        <div class="c4u-about-container">
          <h2 class="about-title">About</h2>
          <p
            class="about-details"
          >O'Mahony Meats are an SME based in Dublin. They supply meat to both the catering trade and the general public. They sell over 600 products. They customer-driven products</p>
        </div>
        <div class="c4u-project-container">
          <h2 class="project-title">The Project</h2>
          <p
            class="project-details"
          >Rocket.Chip Web Solutions worked closely with O'Mahony Meats to develop a custom web solution to suit their style, brand identity and specific requirements.</p>
          <p
            class="project-details"
          >The website features a unique navigation and page structure, which was designed in conjuction with the client. It aslo features a custom back-end which enables the client to post employment opportunities, special offers, recipes and more.</p>
        </div>
        <div class="c4u-modal-link-container">
          <a
            href="https://sample-online-shop.netlify.com/"
            target="_blank"
            class="om-modal-link"
          >Visit Site</a>
        </div>

        <div
          class="c4uModal-close"
          @click="c4uModalClose()"
          @mouseenter="rotateForward()"
          @mouseleave="rotateBackwards()"
        >
          <i class="fal fa-times-circle omModal-close-button"></i>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import PortfolioItem from "../components/PortfolioItem.vue";
import { TimelineMax } from "gsap";
export default {
  name: "Portfolio",
  components: {
    PortfolioItem
  },
  data() {
    return {
      hover: false,
      images: ["/images/OM_meats.png"]
      //   isOmModalOpen: false
    };
  },
  methods: {
    omModalOpen() {
      const box = document.querySelector(".omModalContainer");
      const modal = document.querySelector(".omModal");
      const imageContainer = document.querySelector(".omImage-container");
      const aboutContainer = document.querySelector(".om-about-container");
      const projectContainer = document.querySelector(".om-project-container");
      const linkContainer = document.querySelector(".om-modal-link-container");
      const timeline = new TimelineMax({ paused: false, reversed: false });

      timeline
        .fromTo(
          box,
          0.2,
          { display: "none", opacity: 0, height: 0, width: 0 },
          {
            opacity: 1,
            height: "100vh",
            width: "100vw",
            backgroundColor: "rgba(0,0,0, 0.8)",
            position: "fixed",
            top: 0,
            bottom: 0,
            left: 0,
            right: 0,
            padding: "1rem",
            zIndex: 2000,
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            transformOrigin: "center"
          }
        )
        .fromTo(
          modal,
          0.2,
          {
            opacity: 0,
            width: 0,
            height: 0,
            height: "70%",
            width: "70%"
          },
          {
            // backgroundColor: "rgba(120,48,58, 0.9)",
            backgroundColor: "rgba(248,248,248, 0.9)",
            opacity: 1,
            width: "60%",
            height: "60%",
            display: "flex",
            flexDirection: "column",
            justifyContent: "space-between"
          }
        )
        .fromTo(
          imageContainer,
          0.2,
          {
            display: "none",
            opacity: 0,
            x: -50
            // width: "40%",
            // marginTop: "2rem"
          },
          {
            // marginTop: "2rem",
            opacity: 1,
            x: 0,
            // width: "40%",
            // objectFit: "cover",
            display: "flex",
            justifyContent: "center",
            alignItems: "center"
          }
        )
        .fromTo(
          aboutContainer,
          0.2,
          { display: "none", opacity: 0, y: -50, width: "90%" },
          {
            display: "flex",
            opacity: 1,
            y: 0,
            flexDirection: "column",
            justifyContent: "center",
            alignItems: "start",
            width: "90%"
          }
        )
        .fromTo(
          projectContainer,
          0.2,
          { display: "none", opacity: 0, y: -50, width: "90%" },
          {
            display: "flex",
            opacity: 1,
            y: 0,
            flexDirection: "column",
            justifyContent: "center",
            alignItems: "start",
            width: "90%"
          }
        )
        .fromTo(
          linkContainer,
          0.2,
          { display: "none", opacity: 0, y: -50 },
          {
            display: "flex",
            opacity: 1,
            y: 0,
            flexDirection: "column",
            justifyContent: "center",
            marginTop: "1rem"
          }
        );
    },
    c4uModalOpen() {
      const box = document.querySelector(".c4uModalContainer");
      const modal = document.querySelector(".c4uModal");
      const imageContainer = document.querySelector(".c4uImage-container");
      const aboutContainer = document.querySelector(".c4u-about-container");
      const projectContainer = document.querySelector(".c4u-project-container");
      const linkContainer = document.querySelector(".c4u-modal-link-container");
      const timeline = new TimelineMax({ paused: false, reversed: false });

      timeline
        .fromTo(
          box,
          0.2,
          { display: "none", opacity: 0, height: 0, width: 0 },
          {
            opacity: 1,
            height: "100vh",
            width: "100vw",
            backgroundColor: "rgba(black, 0.7)",
            position: "fixed",
            top: 0,
            bottom: 0,
            left: 0,
            right: 0,
            padding: "1rem",
            zIndex: 2000,
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            transformOrigin: "center"
          }
        )
        .fromTo(
          modal,
          0.2,
          {
            opacity: 0,
            delay: 1,
            width: "50%",
            height: "50%",
            flexDirection: "column",
            alignItems: "center"
          },
          {
            // backgroundColor: "rgba(120,48,58, 0.9)",
            backgroundColor: "rgba(248,248,248, 0.9)",
            opacity: 1,
            width: "50%",
            height: "50",
            display: "flex",
            flexDirection: "column",
            alignItems: "center"
          }
        )
        .fromTo(
          imageContainer,
          0.2,
          {
            display: "none",
            opacity: 0,
            x: -50,
            height: "22rem",
            marginTop: "2rem",
            display: "flex",
            justifyContent: "center"
          },
          {
            marginTop: "2rem",
            opacity: 1,
            x: 0,
            height: "22rem",
            objectFit: "cover",
            display: "flex",
            justifyContent: "center"
          }
        )
        .fromTo(
          aboutContainer,
          0.2,
          { display: "none", opacity: 0, y: -50, width: "70%" },
          {
            display: "flex",
            opacity: 1,
            y: 0,
            flexDirection: "column",
            justifyContent: "center",
            alignItems: "center",
            width: "70%"
          }
        )
        .fromTo(
          projectContainer,
          0.2,
          { display: "none", opacity: 0, y: -50, width: "70%" },
          {
            display: "flex",
            opacity: 1,
            y: 0,
            flexDirection: "column",
            justifyContent: "center",
            alignItems: "center",
            width: "70%"
          }
        )
        .fromTo(
          linkContainer,
          0.2,
          { display: "none", opacity: 0, y: -50 },
          {
            display: "flex",
            opacity: 1,
            y: 0,
            flexDirection: "column",
            justifyContent: "center",
            marginTop: "1rem"
          }
        );
    },
    omModalClose() {
      const box = document.querySelector(".omModalContainer");

      const timeline = new TimelineMax();
      timeline.to(box, 0.3, { opacity: 0, display: "none" });
    },
    rotateForward() {
      const close = document.querySelector(".omModal-close-button");

      const timeline = new TimelineMax({ reverse: true });

      timeline.to(close, 0.2, { transform: "rotate(90deg)" });
    }
    // rotateBackwards() {
    //   const close = document.querySelector(".omModal-close-button");

    //   const timeline = new TimelineMax();

    //   timeline.to(close, 0.2, { transform: "rotate(-20deg)" });
    // }
  }
};
</script>
<style lang="scss" scoped>
.container {
  grid-column: 1 / -1;
  width: 100%;
  height: auto;
  background: lightgray;
  display: flex;
  position: relative;
}

.m-container {
  margin: 0 auto;
  display: flex;
  width: 90%;
  flex-wrap: wrap;
}
.portfolio-item {
  margin-top: 1rem;
  width: 33%;
  display: flex;
  flex-direction: column;
  padding: 1rem;
  position: relative;
}

.portfolio-item::after {
  display: none;
}

.portfolio-item:hover {
  cursor: pointer;
  .link-container {
    display: flex;
  }
  .link {
    display: inline-block;
    opacity: 1;
  }

  .portfolio-item::after {
    // display: block;
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 10;
  }
}

.portfolio-item-img-container {
  height: 20rem;
  width: 100%;
}

.portfolio-item-image {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.heading-container {
  padding: 1rem;
}

.heading {
  font-size: 1.9rem;
  text-align: center;
}

.link-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: none;
  justify-content: center;
  align-items: center;
  background-color: rgba(black, 0.5);
  transition: all 1s ease-in-out;
  z-index: 1;
}

.link {
  display: none;
  background: green;
  padding: 1rem 2rem;
  border-radius: 5px;
  color: white;
  z-index: 200;
  opacity: 1;
}

.om_link {
  background: #78303a;
}

.c4u_link {
  background: black;
}

.om-about-container,
.om-project-container {
  display: flex;
  flex-direction: column;
  // justify-content: center;
  align-items: flex-start;
}

.om-about-container {
  margin-top: 1rem;
}

.about-title,
.project-title {
  text-align: left;
  color: rgb(120, 48, 58);
  font-size: 2rem;
}
.project-title {
  margin-top: 2rem;
}

.about-details,
.project-details {
  align-self: center;
  margin-top: 1rem;
  color: darkslategray;
  font-size: 1.4rem;
  width: 100%;
}

.om-modal-link {
  border: rgb(120, 48, 58) solid 1px;
  padding: 1rem 2rem;
  border-radius: 5px;
  color: rgb(120, 48, 58);

  &:hover {
    border: rgb(120, 48, 58);
    color: rgba(120, 48, 58);
    background: #f8f8f8;
  }
}

// Modals
.modalContainer {
  position: relative;
}

.modal {
}

.omModal-top-section {
  display: flex;
}

.om-modal-right {
  width: 60%;
  display: flex;
  flex-direction: column;
}

.omModal-close {
  position: absolute;
  top: 2rem;
  right: 3rem;
}

.omModal-close-button {
  font-size: 2.4rem;
  color: rgb(120, 48, 58);
  cursor: pointer;
}

// .omImage-container {
//   margin-top: 2rem;
//   object-fit: cover;
//   display: flex;
//   justify-content: center;
// }

.image {
  height: 20rem;
  width: 30rem;
}

.show {
  background-color: black;
}
</style>
