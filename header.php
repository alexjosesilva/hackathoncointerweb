<div id="topo1">
        	<div id="logo">
				<a href="http://localhost/www/hackathoncointerweb/">
					<img src="image/logo2.png" height="60"/>
				</a>
           	</div>
            <div id="menu">
            	<ul>
            		<div class="dropdown">
						<li>
							<span class="dropbtn">TÉCNICOS</span>
							<div class="dropdown-content">
								<a href="cadastrartecnico.php">Cadastrar Técnicos</a>
								<a href="relatoriotecnico.php">Relatorio dos Técnicos</a>
							</div>
						</li>
					</div>
					
                    <div class="dropdown">
						<li>
							<span class="dropbtn">MANUTENÇÕES</span>
							<div class="dropdown-content">
								<a href="cadastrarmanutencao.php">Cadastrar Manutenções</a>
								<a href="relatoriomanutencao.php">Relatorio das Manutenções</a>
							</div>
						</li>
					</div>
					
                    <div class="dropdown">
						<li>
							<span class="dropbtn">MÁQUINAS</span>
							<div class="dropdown-content">
								<a href="cadastrarmaquina.php">Cadastrar Máquinas</a>
								<a href="relatoriomaquina.php">Relatorio das Máquinas</a>
							</div>
						</li>
					</div>
					
                    <div class="dropdown">
						<li>
							<span class="dropbtn">MÉTRICAS</span>
							<div class="dropdown-content">
								<a href="cadastrarmetrica.php">Cadastrar Métricas</a>
								<a href="relatoriometrica.php">Relatorios</a>
							</div>
						</li>
					</div>
					
                    <div class="dropdown">
						<li>
							<span class="dropbtn">MANUAIS</span>
							<div class="dropdown-content">
								<a href="cadastrarmanual.php">Cadastrar Manual</a>
							</div>
							
						</li>
					</div>
            	</ul>
			</div>
            <div id="persona">
				<div class="dropdown">
				<img src="image/persona.png" height="50" class="dropbtn"/>
					<div class="dropdown-content">
						<a href="./configuracao.php">Configuracao</a>
						<a href="./perfil.php">Perfil de <b><?php echo htmlspecialchars($_SESSION["ds_nome"]); ?></b></a>
						<a href="logout.php" class="btn btn-danger">Sair</a>
				  </div>
				</div>
			</div>
		</div>