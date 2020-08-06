window.onload = function () {
    
    let btn = document.getElementById('btn-login')
    let form = document.querySelector('#form')
    let data = new FormData(form)
    btn.onclick = (e) => {
        e.preventDefault()
        
        console.log(data.data())
    }
}