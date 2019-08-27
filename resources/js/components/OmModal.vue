<template>
  <div class="modalContainer" v-if="isOmModalOpen">
    <div class="modal">
      <div class="image-container" ref="omModal">
        <img src="/images/om_meatsbackground.png" class="image" alt />
      </div>
    </div>
  </div>
</template>
<script>
import { TimelineMax } from "gsap";
export default {
  name: "OmModal",
  props: ["isOmModalOpen"],
  watch: {
    isOmModalOpen() {
      const box = this.$refs;
      const timeline = new TimelineMax();

      timeline.fromTo(box, 5, { opacity: 0 }, { opacity: 1 });
    }
  }
};
</script>
<style lang="scss" scoped>
.modalContainer {
  width: 100vw;
  height: 100vh;
  background-color: rgba(black, 0.7);
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 1rem;
  z-index: 2000;
  display: flex;
  justify-content: center;
}

.modal {
  background: rgba(#78303a, 0.9);
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.image-container {
  margin-top: 2rem;
  object-fit: cover;
  display: flex;
  justify-content: center;
}

.image {
  height: 90%;
  width: 90%;
}

.show {
  background-color: black;
}
</style>


