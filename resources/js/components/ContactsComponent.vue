<template>
  <div>
    <form-component @new="reloadContacts()"></form-component>
    <contacts-list-component
      :contacts="contacts"
      @new="reloadContacts()"
    ></contacts-list-component>
  </div>
</template>

<script>
export default {
  name: "Contact",
  created() {},
  data() {
    return {
      contacts: [],
    };
  },
  mounted() {
    this.reloadContacts();
  },
  props: {},
  methods: {
    reloadContacts() {
      axios.get("/contacts").then((response) => (this.contacts = response.data[0]));
    },
  },
};
</script>

<style lang="scss" scoped></style>
