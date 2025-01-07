const form = document.getElementById('form');
const debit = document.getElementById('debit');
const kredit = document.getElementById('kredit');
const errorElement = document.getElementById('error');


form.addEventListener('submit', (e) => {
    let messages = []
    if (debit.value === '' || debit.value == null || debit.value == 0 ){
        if(kredit.value === '' || kredit.value == null || kredit.value == 0){
            messages.push('Masukkan Total Debit Atau Kredit')    
        }else{
            //sukses
        }
    }else if(debit.value !== '' || debit.value != null || debit.value != 0){
        if(kredit.value ==='' || kredit.value == null || kredit.value == 0){
            //sukses
        }else{
            messages.push('Harap mengisikan 1 saja antara debit dan kredit')    
        }
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})
