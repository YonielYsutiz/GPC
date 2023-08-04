<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPC</title>
</head>
<body>
    <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Green plastic</a>
                </div>
            </nav>
        </div>  
    <div class="container mt-5">
        <!-- <h1>Certificado verde</h1> -->
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card w-75 p-3" style="border-radius: 15px;">
                        <div class="card-title"><h3>Generar certificado de emision</h3></div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Nombre de la empresa</label>
                                <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputBill" class="form-label">Numero de factura</label>
                                <input type="text" class="form-control" id="inputBill" aria-describedby="billHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputRefence" class="form-label">Referencia del producto</label>
                                <input type="text" class="form-control" id="inputReference" aria-describedby="referenceHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputWeight" class="form-label">Peso unitario</label>
                                <input type="text" class="form-control" id="inputWeight" aria-describedby="weightHelp" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAmount" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="exampleInputAmount" aria-describedby="amountHelp" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputTotal" class="form-label">Total de kilos</label>
                                <input type="text" class="form-control" id="exampleInputTotal" aria-describedby="totalHelp" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            </div>
                            <button type="submit"  class="btn btn-success">Generar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card w-75 p-3" style="border-radius: 15px;">
                        <div class="card-title"><h3>Resultado de tu impacto</h3></div>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputOrders" class="form-label">Total de kilos plastico por pedido</label>
                                <input type="text" class="form-control" id="inputOrders" aria-describedby="ordersHelp" value="3.000,0" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEthylene" class="form-label">Etileno</label>
                                <input type="text" class="form-control" id="inputEthylene" aria-describedby="ethyleneHelp" value="3.100,2" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputWater" class="form-label">Agua</label>
                                <input type="text" class="form-control" id="inputWater" aria-describedby="waterHelp" value="117.780,0" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputDioxide" class="form-label">Dioxido de carbono</label>
                                <input type="text" class="form-control" id="inputDioxide" aria-describedby="dioxideHelp" value="7.518,0" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEnergy" class="form-label">Energia</label>
                                <input type="text" class="form-control" id="exampleInputEnergy" aria-describedby="energyHelp" value="15.085,0" disabled>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>