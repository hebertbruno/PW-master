<?php
/* @var $this yii\web\View */
?>
<!--Incompleto -->
<head>
    <meta charset="utf-8">
        <title>Jogo Tetris</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <div id="proxima-peca">
        	<table id="gridProxPeca" class="tabuleiro"><tbody>
        	

        	<tr>
        		<td style="background-color: transparent;"></td>
        		<td style="background-color: transparent;"></td>
        		<td style="background-color: transparent;"></td>
        		<td style="background-color: transparent;"></td>
        	</tr>

        	<tr>
        		<td style="background-color: transparent;"></td>
        		<td style="background-color: transparent;"></td>
        		<td style="background-color: transparent;"></td>
        		<td style="background-color: transparent;"></td>
        	</tr>

        	</tbody>
        	</table>
        </div>

       
        <div id="informacoes">
        	<table id="pontos">		
        		<tbody>
        			<tr>			
        				<td class="title">Pontuação:</td>
        				<td>00000</td>
        			</tr>		

        			<tr>
        				        			</tr>	
        		</tbody>
        	</table>	

        	<table id="comandos"> 		
        		<tbody>
        			<tr>
        				<td colspan="2" class="title"> Comandos	</td>
					</tr>

					<tr>
						<td class="left">SPACE</td>
						<td>Iniciar</td>
					</tr>

					<tr>
						<td class="left"> ↑ </td>
						<td>Rotacionar peças</td>
					</tr>		

					<tr>
						<td class="left">←, →, ↓</td>
						<td>Mover peças</td>
					</tr>	
				</tbody>
			</table>
		</div>

         <div id="tabuleiro">
            <table id="gridTabuleiro" class="tabuleiro">
                <tbody>
                    
             
                    <tr>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                    </tr>
                    <tr>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                        <td style="background-color: transparent;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script >(function(){ //funcao imediata

	var tabuleiro,gridProxPeca;
	var pecaAtual, proxPeca;
	var BAIXO=0,DIREITA=1,CIMA=2,ESQUERDA=3;
	var letras = ['i','j','l','o','s','t','z'];
	var cores=['green','blue','red','yellow','orangered','black','pink'];
	var playing=false;
	var tabelaPontos;

	initTabuleiro();

	function desenharTetris() {
		resetarTabuleiro(tabuleiro);
	}

	

	function desenharLetra(letra,x,y) {
	var alfabeto= {
		'C':
			[
				{letra:'j',x:0,y:1,direcao:0},
				{letra:'i',x:2,y:0,direcao:0},
				{letra:'l',x:5,y:1,direcao:0}
			],
		'O':
			[
				{letra:'j',x:0,y:0,direcao:1},
				{letra:'l',x:0,y:3,direcao:1},
				{letra:'j',x:3,y:3,direcao:3},
				{letra:'l',x:3,y:0,direcao:3}
			],
		'W':
			[
				{letra:'i',x:0,y:0,direcao:0},
				{letra:'o',x:4,y:2,direcao:0},
				{letra:'i',x:0,y:3,direcao:0},
				{letra:'o',x:4,y:5,direcao:0},
				{letra:'i',x:0,y:6,direcao:0},
			],
		'T':
			[
				{letra:'i',x:0,y:0,direcao:3},
				{letra:'j',x:2,y:1,direcao:1},
				{letra:'l',x:2,y:0,direcao:1},
				{letra:'o',x:5,y:1,direcao:1}
			],
		'E':
			[
				{letra:'l',x:0,y:0,direcao:2},
				{letra:'o',x:3,y:0,direcao:0},
				{letra:'j',x:5,y:0,direcao:2}
			],
		'R':
			[
				{letra:'l',x:0,y:1,direcao:2},
				{letra:'i',x:3,y:0,direcao:0},
				{letra:'i',x:1,y:3,direcao:0},
				{letra:'z',x:4,y:3,direcao:2}
			],
		'I':
			[
				{letra:'o',x:0,y:1,direcao:0},
				{letra:'i',x:2,y:0,direcao:0},
				{letra:'i',x:2,y:1,direcao:0}
			],
		'S':
			[
				{letra:'j',x:2,y:2,direcao:0},
				{letra:'z',x:3,y:0,direcao:0},
				{letra:'z',x:6,y:2,direcao:0},
				{letra:'j',x:7,y:1,direcao:2}
			]
	};
	for(var i=0; i< alfabeto[letra].length;i++) {
		var peca = alfabeto[letra][i];
		criarPeca(peca.letra,tabuleiro,{x:x+peca.x,y:y+peca.y,direcao:peca.direcao}).desenhar();
	}
	}

	function novoJogo() {
	console.log("Início");
	resetarTabuleiro(tabuleiro);
	novaPeca();
	tabelaPontos.clear();
	playing=true;
	}

	function fimJogo() {
	console.log("Fim");
	playing=false;
	}

	function verificarLinhas() {
	for (var i = tabuleiro.rows.length-1; i>=0; i--) {
		var estaCompleta=true;
		for (var j = 0; j < tabuleiro.rows[i].cells.length; j++) {
			if(cores.indexOf(tabuleiro.rows[i].cells[j].style.backgroundColor)<0) {
				estaCompleta=false;
			}
		}
		if(estaCompleta) {
			tabelaPontos.addRow();
			apagarLinha(i);
			verificarLinhas();
			return;
		}
	}
	}

	function apagarLinha(linha) {
	if (linha==0) {
		for (var j = 0; j < tabuleiro.rows[linha].cells.length; j++) {
			tabuleiro.rows[linha].cells[j].style.backgroundColor = 'transparent';
		}
		return;
	}

	for (var i = linha; i >0; i--) {
		for (var j = 0; j < tabuleiro.rows[i].cells.length; j++) {
			tabuleiro.rows[i].cells[j].style.backgroundColor = tabuleiro.rows[i-1].cells[j].style.backgroundColor;
		}
	}
	}

	function resetarTabuleiro(tabuleiro) {
	for (var i = 0; i < tabuleiro.rows.length; i++) {
		for (var j = 0; j < tabuleiro.rows[i].cells.length; j++) {
			tabuleiro.rows[i].cells[j].style.backgroundColor = 'transparent';
		}
	}
	}

	function atualizaProximaPeca() {
	proxPeca = criarPeca(letras[Math.floor(Math.random() * letras.length)],gridProxPeca,{});
	resetarTabuleiro(gridProxPeca);
	proxPeca.desenhar();
	}

	function novaPeca() {
	pecaAtual = criarPeca(proxPeca.letra,tabuleiro,{});
	if (!pecaAtual.estaDisponivel()) {
		fimJogo();
		return;
	}
	pecaAtual.desenhar();
	atualizaProximaPeca();

	}

	function initTabuleiro() {
	tabuleiro = document.createElement("table");
    tabuleiro.setAttribute("id", "gridTabuleiro");
	tabuleiro.numLinhas=30;
	tabuleiro.numColunas=23;
	tabuleiro.classList.add('tabuleiro');
    var linha, coluna;
    for (var i = 0; i < tabuleiro.numLinhas; i++) {
        linha = tabuleiro.insertRow(0);
        for (var j = 0; j < tabuleiro.numColunas;j++) {
            coluna = linha.insertCell(0);
        }
    }
    document.getElementById("tabuleiro").appendChild(tabuleiro);

	gridProxPeca = document.createElement("table");
    gridProxPeca.setAttribute("id", "gridProxPeca");
	gridProxPeca.classList.add('tabuleiro');
    var linha, coluna;
    for (var i = 0; i < 4; i++) {
        linha = gridProxPeca.insertRow(0);
        for (var j = 0; j < 4;j++) {
            coluna = linha.insertCell(0);
        }
    }
    document.getElementById("proxima-peca").appendChild(gridProxPeca);

 	document.getElementById("informacoes").innerHTML=
	'<table id="tabelaPontos">\
		<tr>\
			<td class="title">Pontuação:</td>\
			<td>00000</td>\
		</tr>\
		<tr>\
			<td class="title"></td>\
			<td></td>\
		</tr>\
	</table>\
	<table id="comandos"> \
		<tr>\
			<td colspan="2" class="title">\
				Comandos\
			</td>\
		</tr>\
		<tr>\
			<td class="botoes">SPACE</td>\
			<td>Iniciar Jogoe</td>\
		</tr>\
		<tr>\
			<td class="botoes"> ↑ </td>\
			<td>Rotacionar Peças</td>\
		</tr>\
		<tr>\
			<td class="botoes"> ←, →, ↓</td>\
			<td>Mover Peças</td>\
		</tr>\
	</table>';

	tabelaPontos =  document.getElementById("tabelaPontos");

	tabelaPontos.clear = function(points) {
		tabelaPontos.rows[0].cells[1].innerHTML="00000";
		tabelaPontos.rows[1].cells[1].innerHTML="0";
	}

	tabelaPontos.addPoints = function(points) {
		console.log(tabelaPontos.rows[0].cells[1].innerHTML);
		var s = "00000" + (Number(tabelaPontos.rows[0].cells[1].innerHTML) + points).toString();;
		tabelaPontos.rows[0].cells[1].innerHTML = s.substr(s.length-5);
	}

	tabelaPontos.addRow = function() {
		tabelaPontos.rows[1].cells[1].innerHTML =  (Number(tabelaPontos.rows[1].cells[1].innerHTML) + 1).toString();
		this.addPoints(100);
	}

	atualizaProximaPeca();
	desenharTetris();
	}

	function criarPeca(letra,tabuleiro,opts) {
	var auxPeca={x:0,y:0,direcao:0,grid:tabuleiro,letra:letra};

	if(opts['x'])
		auxPeca.x=opts['x'];

	if(opts['y'])
		auxPeca.y=opts['y'];

	if(opts['direcao'])
		auxPeca.direcao=opts['direcao'];

	switch(letra) {
	case 'i':
		auxPeca.blocks= [0x0F00, 0x2222, 0x00F0, 0x4444];
		auxPeca.color=cores[0];
		break;
	case 'l':
		auxPeca.blocks= [0x44C0, 0x8E00, 0x6440, 0x0E20];
		auxPeca.color=cores[1];
		break;
	case 'j':
		auxPeca.blocks= [0x4460, 0x0E80, 0xC440, 0x2E00];
		auxPeca.color=cores[2];
		break;
	case 'o':
		auxPeca.blocks= [0xCC00, 0xCC00, 0xCC00, 0xCC00];
		auxPeca.color=cores[3];
		break;
	case 's':
		auxPeca.blocks= [0x06C0, 0x8C40, 0x6C00, 0x4620];
		auxPeca.color=cores[4];
		break;
	case 't':
		auxPeca.blocks= [0x0E40, 0x4C40, 0x4E00, 0x4640];
		auxPeca.color=cores[5];
		break;
	case 'z':
	default:
		auxPeca.blocks= [0x0C60, 0x4C80, 0xC600, 0x2640];
		auxPeca.color=cores[6];
		break;
	}

	function mapearFuncao(funcao) {
		var bit, lin = 0, col = 0, blocks = auxPeca.blocks[auxPeca.direcao];
  	  	for(bit = 0x8000 ; bit > 0 ; bit = bit >> 1) {
	  	    if (blocks & bit) {
	  	        funcao(auxPeca.x+col,auxPeca.y+lin);
	  	    }
	  	    if (++col === 4) {
	  	      col = 0;
	  	      ++lin;
	  	    }
  	  	}
	}

	auxPeca.desenhar=function() {
		return mapearFuncao(
			function(x,y) {
		        auxPeca.grid.rows[x].cells[y].style.backgroundColor = auxPeca.color;
			}
		)
	}

	auxPeca.apagar=(function () {
		var aux = this.color;
		this.color='transparent';
	    this.desenhar();
		this.color=aux;
	});

	auxPeca.estaDisponivel=(function () {
		var result = true;
		mapearFuncao(
			function(x,y) {
				if (
					(x < 0) || (x >= auxPeca.grid.numLinhas) ||
					(y < 0) || (y >= auxPeca.grid.numColunas)  ||
					(cores.indexOf(auxPeca.grid.rows[x].cells[y].style.backgroundColor)>=0)
				) {
					result = false;
				}
			}
		)
		return result;
	});

	auxPeca.mover=function(direcao) {
		var estadoAnterior = {x:this.x,y:this.y,direcao:this.direcao};
		this.apagar();
		switch (direcao) {
			case 'BAIXO':
				this.x++;
				break;
			case 'ESQUERDA':
				this.y--;
				break;
			case 'DIREITA':
				this.y++;
				break;
			case 'CIMA':
				this.direcao=(this.direcao+1)%4
				break;
		}
		if(!this.estaDisponivel()) {
			this.x=estadoAnterior.x;
			this.y=estadoAnterior.y;
			this.direcao=estadoAnterior.direcao;

			if(direcao=='BAIXO') {
				tabelaPontos.addPoints(10);
				this.desenhar();
				verificarLinhas();
				novaPeca();
				return;
			}
		}
		this.desenhar();
	}
	return auxPeca;
	}

	//Atualizar a tabela
	window.setInterval(function(){
		if(playing) {
			pecaAtual.mover('BAIXO');
		}
	}, 500);

	// Eventos de teclado
	addEventListener("keydown", function(e) {
	if(!playing){
		if(e.key==' ') {
			novoJogo();
		}
		return;
	}
	switch (e.key) {
		case 'ArrowDown':
			pecaAtual.mover('BAIXO');
			break;
		case 'ArrowRight':
			pecaAtual.mover('DIREITA');
			break;
		case 'ArrowLeft':
			pecaAtual.mover('ESQUERDA');
			break;
		case 'ArrowUp':
			pecaAtual.mover('CIMA');
			break;
	}
	});
})();</script>
    
</body>