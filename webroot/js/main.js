(()=>{
  window.onload = () => {
    const upload = document.getElementById('upload')
    const preview = document.getElementById('preview')

    const update = ([file]) => {
      if (file)
        preview.src = URL.createObjectURL(file)
    }

    upload.addEventListener('change', ev => {
       update(upload.files)
    })
  }


})()