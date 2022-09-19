const cep = document.querySelector("#cep")

const showData = (result)=>{
    for(const campo in result){
        if(document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
        }
    }
}




cep.addEventListener("blur",(e)=>{
    let search = cep.value.replace("-","")
    const options = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
    .then(response =>{ response.json()
        .then( data => showData(data))
    })
    .catch(e => console.log('Deu Erro: '+ e,message))
})
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js', {scope: '/js/'})
    .then(function(reg) {
      // registration worked
      console.log('Registration succeeded. Scope is ' + reg.scope);
    }).catch(function(error) {
      // registration failed
      console.log('Registration failed with ' + error);
    });
  }
