class videoY extends HTMLElement{
  constructor(){    
    super()

      const video = this.getAttribute('video')
      const title = this.getAttribute('title')

      const shadow = this.attachShadow({mode:'open'})

      shadow.appendChild(this.style())

      const element = this.elements(video, title)        
      shadow.appendChild(element)
  }


  elements(video, title){
      const section = document.createElement('section')
      section.setAttribute('class','video')

      section.innerHTML=
          `
            <h2>Veja um pouco breve resumo!</h2>
            <iframe width="560" height="315" src="`+video+`" title="`+title+`" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
          `
      
      return section
  }

  style(){
      const styles = document.createElement('style')
      styles.textContent=`
      /* Video */
      .video{
          width:90vw;
          margin: 50px;
          display:flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
      }
      
      .video h2{
          color: var(--color-primary--);
          font-family: var(--montserrat--);
          font-size: clamp(1rem, 1rem + 1vw, 2rem);
          font-weight: 400;
          margin-bottom: 1rem;

          text-align:center
      }
      
      .video iframe{
          border-radius: 10px;
      }
      /* Video */

      @media (max-width:700px){
        .video iframe{
          width:inherit;
        }
      }

      `
      
      return styles
  }
}

customElements.define('video-y', videoY)