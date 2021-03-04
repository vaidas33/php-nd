document.querySelector('[type=button]').addEventListener('click', () => {


    axios.post(uriPath+'api/create/', {
        firstName: 'Fred',
        lastName: 'Flintstone'
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });

      
    console.log('klik');
})