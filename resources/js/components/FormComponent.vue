<template>
  <div class="container">
    <div class="row justify-content-center mb-3">
      <div class="col-md-8">
        <h3>Nuevo contacto</h3>
      </div>
      <div class="col-md-8">
        <form v-on:submit.prevent="newContact()">
          <div class="row mb-3">
            <div class="col">
              <input
                type="text"
                class="form-control"
                name="name"
                placeholder="Nombre"
                v-model="name"
              />
            </div>
            <div class="col">
              <input
                type="text"
                class="form-control"
                name="surname"
                placeholder="Apellidos"
                v-model="surname"
              />
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <input
                type="text"
                class="form-control"
                name="email"
                placeholder="Email"
                v-model="email"
              />
            </div>
            <div class="col">
              <input
                type="text"
                class="form-control"
                name="phone"
                placeholder="Teléfono"
                v-model="phone"
              />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <input
                type="text"
                class="form-control"
                name="address"
                placeholder="Dirección"
                v-model="address"
              />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <button type="submit" class="btn btn-primary">Guardar contacto</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Test",
  created() {},
  data() {
    return {
      name: "",
      surname: "",
      email: "",
      phone: "",
      address: "",
    };
  },
  props: {},
  methods: {
    newContact() {
      const params = {
        name: this.name,
        surname: this.surname,
        email: this.email,
        phone: this.phone,
        address: this.address,
      };

      axios
        .post("/contacts", params)
        .then((response) => {
          console.log(rersponse);
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => this.$emit("new"));
    },
  },
};
</script>

<style lang="scss" scoped></style>
