
			let http = new XMLHttpRequest();
			http.open( "GET", "style.css", true );
			http.onload = function(){
				if( this.status == 200 ){
					let css = this.responseText;
					let style = `<style>
						${css}
					</style>`;
					document.getElementById( "cssDiv" ).innerHTML = style;
				}
			}
			http.send();
