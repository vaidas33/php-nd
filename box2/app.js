document.querySelector('[type=button]').addEventListener('click', () => {

const count = document.querySelector('#count').value;

    axios.post(uriPath+'api/create/', { // kelias kur kreipsiuosi
        count: count                    // objektas to ka siunciu
      })
      .then(function (response) {
        console.log(response.data.page);
        document.querySelector('#list').innerHTML = response.data.page;
      })
      .catch(function (error) {
        console.log(error);
      });

      
    console.log('klik');
})