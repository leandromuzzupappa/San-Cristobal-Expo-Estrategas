<?php include './includes/head.php' ?>

<div id="Sorteo">

    <div class="Header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 logos mt-auto mb-auto">
                    <img src="./assets/images/sc-logo.png" alt="San Cristobal">
                </div>
                <div class="col-md-6 logos text-right">
                    <img src="./assets/images/as-logo.png" alt="AssociART">
                </div>
            </div>
        </div>
    </div>


<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>Realizar Sorteo</h1>
					</div>
					
				</div>
			</div>
			
			<div class="row topbox">
				<div class="col-md-12 col-md-offset-3 rollbox">
					<div class="line"></div>
					<table><tr id="loadout">
						
					</tr></table>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<button id="roll" class="btn btn-success form-control">SORTEAR</button>
					<div id="msgbox"class="alert alert-warning" style="margin-top:20px;display:none;">Se necesitan 2 participantes como mínimo</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-md-12" style="text-align:center">
					<div id="log"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p>Insert the list of Users:</p>
					<textarea class="form-control inputbox" rows="10"></textarea>
				</div>
			</div>
		</div>

</div>

<?php include './includes/footer.php' ?>