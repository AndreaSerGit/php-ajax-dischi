import Vue from 'vue';
const axios = require('axios').default;


var app = new Vue(
  {
    el: "#app",
    data: {
      cds: [],
    },
    mounted: function() {
        axios
          .get('/php-ajax-dischi/server.php')
          .then(
            function (result) {
            app.cds = result.data;
            console.log(app.cds)
      }
    )
  }
}
);
