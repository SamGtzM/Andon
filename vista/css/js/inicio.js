var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

    ctx.strokeStyle = '#158EC5';
    ctx.lineWidth = 17;
    ctx.shadowBlur= 15;
    ctx.shadowColor = '#1e1e1e'

    function degToRad(degree){
        var factor = Math.PI/180;
        return degree*factor;
    }

    function renderTime(){
        var now = new Date();
        var today = now.toDateString();
        var time = now.toLocaleTimeString();
        var hrs = now.getHours();
        var min = now.getMinutes();
        var sec = now.getSeconds();
        var mil = now.getMilliseconds();
        var smoothsec = sec+(mil/1000);
    var smoothmin = min+(smoothsec/60);

        //Background
        gradient = ctx.createRadialGradient(250, 250, 5, 250, 250, 300);
        gradient.addColorStop(0, "#1E1E1E");
        gradient.addColorStop(1, "#1E1E1E");
        ctx.fillStyle = gradient;
        //ctx.fillStyle = 'rgba(00 ,00 , 00, 1)';
        ctx.fillRect(0, 0, 500, 500);
        //Hours
        ctx.beginPath();
        ctx.arc(250,250,200, degToRad(270), degToRad((hrs*30)-90));
        ctx.stroke();
        //Minutes
        ctx.beginPath();
        ctx.arc(250,250,170, degToRad(270), degToRad((smoothmin*6)-90));
        ctx.stroke();
        //Seconds
        ctx.beginPath();
        ctx.arc(250,250,140, degToRad(270), degToRad((smoothsec*6)-90));
        ctx.stroke();
        //Date
        ctx.font = "25px Helvetica";
        ctx.fillStyle = '#fff'
        ctx.fillText(today, 175, 250);
        //Time
        ctx.font = "25px Helvetica Bold";
        ctx.fillStyle = '#fff';
        ctx.fillText(time+":"+mil, 175, 280);

    }
    setInterval(renderTime, 40);


    // Scrambled Text Effect
class ScrambleTheText {
	constructor(el) {
		this.el = el
		this.chars = '$£¥€ABCDEFGHIJKLMNOPQRSTUVXYZ0101'
		this.update = this.update.bind(this)
	}

	setText(newText) {
		var oldText = this.el.innerText
		var length = Math.max(oldText.length, newText.length)
		var promise = new Promise((resolve) => this.resolve = resolve)
		
		this.queue = []
		for (let i = 0; i < length; i++) {
			var from = oldText[i] || ''
			var to = newText[i] || ''
			var start = Math.floor(Math.random() * 40)
			var end = start + Math.floor(Math.random() * 40)
			this.queue.push({ from, to, start, end })
		}
		cancelAnimationFrame(this.frameRequest)
		this.frame = 0
		this.update()
		return promise
	}
	
	update() {
		let output = ''
		let complete = 0
		for (let i = 0, n = this.queue.length; i < n; i++) {
			let { from, to, start, end, char } = this.queue[i]
			if (this.frame >= end) {
				complete++
				output += to
			} else if (this.frame >= start) {
				if (!char || Math.random() < 0.28) {
					char = this.randomChar()
					this.queue[i].char = char
				}
				output += `<span class="dummy">${char}</span>`
			} else {
				output += from
			}
		}
		this.el.innerHTML = output
		if (complete === this.queue.length) {
			this.resolve()
		} else {
			this.frameRequest = requestAnimationFrame(this.update)
			this.frame++
		}
	}
	
	randomChar() {
		return this.chars[Math.floor(Math.random() * this.chars.length)]
	}
}

// Usage Demo
var mySkills = [
	'Bienvenido',
	'Espero estes teniendo un excelente día',
	'Yo soy una plataforma desarrollada',
    'Específicamente para ayudarte y facilitar tu trabajo diario',
    'Asi que tomemos una taza de cafe y empecemos',

	'Welcome',
	'I hope you are having a great day',
	'I am a developed platform',
    'Specifically to help you and facilitate your daily work',
    'So let´s have a cup of coffee and get started'
]

var el = document.querySelector('.knowledge')
var fx = new ScrambleTheText(el)

let counter = 0
var next = () => {
	fx.setText(mySkills[counter]).then(() => {
		setTimeout(next, 1500)
	})
	counter = (counter + 1) % mySkills.length
}
next()
