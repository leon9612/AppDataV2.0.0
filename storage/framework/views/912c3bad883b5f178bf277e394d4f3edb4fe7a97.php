<?php echo $__env->make('layout.heder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>

</style>
<main id="main">
    <section id="visor" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Frenometro Mixta</h2>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-12 mt-12 mt-lg-12 d-flex align-items-stretch">
                    <form action="<?php echo e(url('/fr')); ?>" method="POST" class="form-control">
                        <?php echo csrf_field(); ?>
                        <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Exitoso</h4>
                            <p><?php echo e($message); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Error</h4>
                            <p><?php echo e($message); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.vehicle-selector','data' => ['placas' => $placas,'usuarios' => $usuarios,'maquinas' => $maquinas]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('vehicle-selector'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placas' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($placas),'usuarios' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usuarios),'maquinas' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($maquinas)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <br>
                        <div class="container" style=" margin-top: 2%; justify-content: center; display: flex ">
                            <div class="row">
                                <label
                                    style="color: rgb(0, 4, 255); font-size: 18px; text-align: center; background-color: lemonchiffon; width: 100%">PESAJES</label>
                                <div style="justify-content: center; display: flex; margin-top: 15px">

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 1 iz"
                                                name="pesaje1i" id="pesaje1i" value="<?php echo e(old('pesaje1i')); ?>">
                                            <?php if($errors->has('pesaje1i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje1i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="text" class="form-control" id="pesaje1d" placeholder="Eje 1 dr"
                                                name="pesaje1d" value="<?php echo e(old('pesaje1d')); ?>">
                                            <?php if($errors->has('pesaje1d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje1d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 2 iz"
                                                name="pesaje2i" id="pesaje2i" value="<?php echo e(old('pesaje2i')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje2i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje2i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 2 dr"
                                                name="pesaje2d" id="pesaje2d" value="<?php echo e(old('pesaje2d')); ?>">
                                            <?php if($errors->has('pesaje2d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje2d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 3 iz"
                                                name="pesaje3i" id="pesaje3i" value="<?php echo e(old('pesaje3i')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje3i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje3i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 3 dr"
                                                name="pesaje3d" id="pesaje3d" value="<?php echo e(old('pesaje3d')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje3d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje3d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 4 iz"
                                                name="pesaje4i" id="pesaje4i" value="<?php echo e(old('pesaje4i')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje4i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje4i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 4 dr"
                                                name="pesaje4d" id="pesaje4d" value="<?php echo e(old('pesaje4d')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje4d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje4d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 5 iz"
                                                name="pesaje5i" id="pesaje5i" value="<?php echo e(old('pesaje5i')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje5i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje5i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" placeholder="Eje 5 dr"
                                                name="pesaje5d" id="pesaje5d" value="<?php echo e(old('pesaje5d')); ?>"
                                                style="width: 100%">
                                            <?php if($errors->has('pesaje5d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('pesaje5d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <label
                                    style="color: rgb(0, 4, 255); font-size: 18px; text-align: center; width: 100%; background-color: lightgoldenrodyellow; margin-top: 15px">FUERZAS</label>
                                <div style="justify-content: center; display: flex; margin-top: 15px">
                                    <br>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza1i"
                                                id="fuerza1i" placeholder="Eje 1 iz" value="<?php echo e(old('fuerza1i')); ?>">
                                            <?php if($errors->has('fuerza1i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza1i')); ?></span>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="text" class="form-control" name="fuerza1d" id="fuerza1d"
                                                placeholder="Eje 1 dr" value="<?php echo e(old('fuerza1d')); ?>">
                                            <?php if($errors->has('fuerza1d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza1d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza2i"
                                                id="fuerza2i" placeholder="Eje 2 iz" value="<?php echo e(old('fuerza2i')); ?>">
                                            <?php if($errors->has('fuerza2i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza2i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza2d"
                                                id="fuerza2d" placeholder="Eje 2 dr" value="<?php echo e(old('fuerza2d')); ?>">
                                            <?php if($errors->has('fuerza2d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza2d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza3i"
                                                id="fuerza3i" placeholder="Eje 3 iz" value="<?php echo e(old('fuerza3i')); ?>">
                                            <?php if($errors->has('fuerza3i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza3i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza3d"
                                                id="fuerza3d" placeholder="Eje 3 dr" value="<?php echo e(old('fuerza3d')); ?>">
                                            <?php if($errors->has('fuerza3d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza3d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza4i"
                                                id="fuerza4i" placeholder="Eje 4 iz" value="<?php echo e(old('fuerza4i')); ?>">
                                            <?php if($errors->has('fuerza4i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza4i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza4d"
                                                id="fuerza4d" placeholder="Eje 4 dr" value="<?php echo e(old('fuerza4d')); ?>">
                                            <?php if($errors->has('fuerza4d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza4d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza5i"
                                                id="fuerza5i" placeholder="Eje 5 iz" value="<?php echo e(old('fuerza5i')); ?>">
                                            <?php if($errors->has('fuerza5i')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza5i')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-1 col-lg-1" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerza5d"
                                                id="fuerza5d" placeholder="Eje 5 dr" value="<?php echo e(old('fuerza5d')); ?>">
                                            <?php if($errors->has('fuerza5d')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerza5d')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                </div>
                                <label
                                    style="color: rgb(0, 4, 255); font-size: 18px; text-align: center; width: 100%; background-color: lightgoldenrodyellow; margin-top: 15px">FUERZAS
                                    AUXILIARES</label>
                                <div style="justify-content: center; display: flex; margin-top: 15px">

                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerzaauxi"
                                                id="fuerzaauxi" placeholder="Fuer aux iz"
                                                value="<?php echo e(old('fuerzaauxi')); ?>" style="width: 100%">
                                            <?php if($errors->has('fuerzaauxi')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerzaauxi')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="fuerzaauxd"
                                                id="fuerzaauxd" placeholder="Fuer aux dr"
                                                value="<?php echo e(old('fuerzaauxd')); ?>" style="width: 100%">
                                            <?php if($errors->has('fuerzaauxd')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('fuerzaauxd')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <label
                                    style="color: rgb(0, 4, 255); font-size: 18px; text-align: center; width: 100%; background-color: lightgoldenrodyellow; margin-top: 15px">DESEQUILIBRIOS</label>
                                <div style="justify-content: center; display: flex; margin-top: 15px">
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="deseje1"
                                                id="deseje1" placeholder="Des eje 1" value="<?php echo e(old('deseje1')); ?>"
                                                disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="deseje1_"
                                                id="deseje1_">
                                            <?php if($errors->has('deseje1')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('deseje1')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="deseje2"
                                                id="deseje2" placeholder="Des eje 2" value="<?php echo e(old('deseje2')); ?>"
                                                disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="deseje2_"
                                                id="deseje2_">
                                            <?php if($errors->has('deseje2')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('deseje2')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="deseje3"
                                                id="deseje3" placeholder="Des eje 3" value="<?php echo e(old('deseje3')); ?>"
                                                disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="deseje3_"
                                                id="deseje3_">
                                            <?php if($errors->has('deseje3')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('deseje3')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="deseje4"
                                                id="deseje4" placeholder="Des eje 4" value="<?php echo e(old('deseje4')); ?>"
                                                disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="deseje4_"
                                                id="deseje4_">
                                            <?php if($errors->has('deseje4')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('deseje4')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="deseje5"
                                                id="deseje5" placeholder="Des eje 5" value="<?php echo e(old('deseje5')); ?>"
                                                disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="deseje5_"
                                                id="deseje5_">
                                            <?php if($errors->has('deseje5')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('deseje5')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <label
                                    style="color: rgb(0, 4, 255); font-size: 18px; text-align: center; width: 100%; margin-top: 15px; background-color:  lightgoldenrodyellow">EFICACIAS</label>
                                <div style="justify-content: center; display: flex; margin-top: 15px">
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01" name="efiaux"
                                                placeholder="Eficacia auxiliar" id="efiaux" value="<?php echo e(old('efiaux')); ?>"
                                                disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="efiaux_"
                                                id="efiaux_">
                                            <?php if($errors->has('efiaux')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('efiaux')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <div class="mb-1">
                                            <input type="number" class="form-control" step="0.01"
                                                placeholder="Eficacia total" name="efitotal" id="efitotal"
                                                value="<?php echo e(old('efitotal')); ?>" disabled>
                                            <input type="hidden" class="form-control" step="0.01" name="efitotal_"
                                                id="efitotal_">
                                            <?php if($errors->has('efitotal')): ?>
                                            <span class="error text-danger"><?php echo e($errors->first('efitotal')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div style="justify-content: center; display: flex; margin-top: 15px">
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <button style="width: 100%; height: 55px;" class="btn btn-outline-secondary"
                                            id="btn-calcular">Calcular
                                            datos</button>
                                    </div>
                                    <div class="col-sm-12 col-md-2 col-lg-2" style="align-content: center">
                                        <input type="hidden" name="tipoprueba" id="tipoprueba" value="7">
                                        <input type="hidden" name="tipopruebaCi2" id="tipopruebaCi2" value="7">
                                        <input type="hidden" name="prueba" id="prueba" value="Frenos">
                                        <button style="width: 100%; height: 55px;" class="btn btn-outline-success"
                                            id="btn-guardar" disabled type="submit">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                </div>

                </form>

            </div>
    </section>
    <!-- ======= Contact Section ======= -->
</main>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    // $(document).ready(function() {
    //     document.getElementById("btn-guardar").disabled = true; // Deshabilitar el botón al cargar la página
    // })
    $(".selPlaca").change(function(e) {
        e.preventDefault();
        var placa = $('.selPlaca option:selected').attr('value');
        var placa2 = placa.split("-");
        $(".Vplaca").val(placa2[1]);
        $("#idprueba").val(placa2[0]);
        $("#placa").val(placa2[1]);
        $("#btn-buscar-placa").click();
        //console.log(placa2);

    });

    $("#btn-calcular").click(function(ev) {
        ev.preventDefault()
        document.getElementById("btn-guardar").disabled = false;
        var sumFuerza = parseFloat($("#fuerza1d").val()) + parseFloat($("#fuerza1i").val()) + parseFloat($(
            "#fuerza2d").val()) + parseFloat($("#fuerza2i").val())
        var peso = parseFloat($("#pesaje1d").val()) + parseFloat($("#pesaje1i").val()) + parseFloat($(
            "#pesaje2d").val()) + parseFloat($("#pesaje2i").val())
        if ($("#pesaje3d").val() !== "" || $("#pesaje3i").val() !== "") {
            //console.log('emtra peso eje 3')
            peso = peso + (parseFloat($("#pesaje3d").val()) + parseFloat($("#pesaje3i").val()))
        }
        if ($("#pesaje4d").val() !== "" || $("#pesaje4i").val() !== "") {
            //console.log('emtra peso eje 4')
            peso = peso + (parseFloat($("#pesaje4d").val()) + parseFloat($("#pesaje4i").val()))
        }
        if ($("#pesaje5d").val() !== "" || $("#pesaje5i").val() !== "") {
            //console.log('emtra peso eje 5')
            peso = peso + (parseFloat($("#pesaje5d").val()) + parseFloat($("#pesaje5i").val()))
        }
        var auxiliar = parseFloat($("#fuerzaauxd").val()) + parseFloat($("#fuerzaauxi").val())
        if (parseFloat($("#fuerza1d").val()) > parseFloat($("#fuerza1i").val())) {
            var des1f = parseFloat($("#fuerza1d").val()) - parseFloat($("#fuerza1i").val())
            des1f = ((des1f / parseFloat($("#fuerza1d").val())) * 100)

            //                            des1f = Math.round((des1f * 100) / 100)
            //                            console.log(des1f)
            $("#deseje1").val(des1f.toFixed(2))
            $("#deseje1_").val(des1f.toFixed(2))
        } else {
            var des1f = parseFloat($("#fuerza1i").val()) - parseFloat($("#fuerza1d").val())
            des1f = ((des1f / parseFloat($("#fuerza1i").val())) * 100)
            //                            
            //                            des1f = Math.round((des1f * 100) / 100)
            //                            console.log(des1f)
            $("#deseje1").val(des1f.toFixed(2))
            $("#deseje1_").val(des1f.toFixed(2))
            //$("#deseje1").val(parseFloat($("#fuerza1i").val()) - parseFloat($("#fuerza1d").val()) * 100) 
        }

        if (parseFloat($("#fuerza2d").val()) > parseFloat($("#fuerza2i").val())) {
            var des2f = parseFloat($("#fuerza2d").val()) - parseFloat($("#fuerza2i").val())
            des2f = ((des2f / parseFloat($("#fuerza2d").val())) * 100);
            $("#deseje2").val(des2f.toFixed(2))
            $("#deseje2_").val(des2f.toFixed(2))
        } else {
            var des2f = parseFloat($("#fuerza2i").val()) - parseFloat($("#fuerza2d").val())
            des2f = ((des2f / parseFloat($("#fuerza2i").val())) * 100);
            //des2f = Math.round((des2f * 100) / 100)
            //.log(des2f)
            $("#deseje2").val(des2f.toFixed(2))
            $("#deseje2_").val(des2f.toFixed(2))

        }
        if ($("#fuerza3d").val() !== "" || $("#fuerza3i").val() !== "") {
            //.log('emtra eje 3')
            sumFuerza = sumFuerza + (parseFloat($("#fuerza3d").val()) + parseFloat($("#fuerza3i").val()));
            if (parseFloat($("#fuerza3d").val()) > parseFloat($("#fuerza3i").val())) {
                var des2f = parseFloat($("#fuerza3d").val()) - parseFloat($("#fuerza3i").val())
                des2f = ((des2f / parseFloat($("#fuerza3d").val())) * 100);
                //                                des2f = Math.round((des2f * 100) / 100)
                $("#deseje3").val(des2f.toFixed(2))
                $("#deseje3_").val(des2f.toFixed(2))
            } else {
                var des2f = parseFloat($("#fuerza3i").val()) - parseFloat($("#fuerza3d").val())
                des2f = ((des2f / parseFloat($("#fuerza3i").val())) * 100);
                //                                des2f = Math.round((des2f * 100) / 100)
                //                                console.log(des2f)
                $("#deseje3").val(des2f.toFixed(2))
                $("#deseje3_").val(des2f.toFixed(2))

            }
        }
        if ($("#fuerza4d").val() !== "" || $("#fuerza4i").val() !== "") {
            //console.log('emtra eje 4')
            sumFuerza = sumFuerza + (parseFloat($("#fuerza4d").val()) + parseFloat($("#fuerza4i").val()));
            if (parseFloat($("#fuerza4d").val()) > parseFloat($("#fuerza4i").val())) {
                var des2f = parseFloat($("#fuerza4d").val()) - parseFloat($("#fuerza4i").val())
                des2f = ((des2f / parseFloat($("#fuerza4d").val())) * 100)
                //                                des2f = Math.round((des2f * 100) / 100)
                //                                console.log(des2f)
                $("#deseje4").val(des2f.toFixed(2))
                $("#deseje4_").val(des2f.toFixed(2))
            } else {
                var des2f = parseFloat($("#fuerza4i").val()) - parseFloat($("#fuerza4d").val())
                des2f = ((des2f / parseFloat($("#fuerza4i").val())) * 100)
                //                                des2f = Math.round((des2f * 100) / 100)
                //                                console.log(des2f)
                $("#deseje4").val(des2f.toFixed(2))
                $("#deseje4_").val(des2f.toFixed(2))

            }
        }

        if ($("#fuerza5d").val() !== "" || $("#fuerza5i").val() !== "") {
            sumFuerza = sumFuerza + (parseFloat($("#fuerza5d").val()) + parseFloat($("#fuerza5i").val()));
            if (parseFloat($("#fuerza5d").val()) > parseFloat($("#fuerza5i").val())) {
                var des2f = parseFloat($("#fuerza5d").val()) - parseFloat($("#fuerza5i").val())
                des2f = ((des2f / parseFloat($("#fuerza5d").val())) * 100)
                //                                des2f = Math.round((des2f * 100) / 100)
                //                                des2f = des2f.substring(0, 2)
                //                                console.log(des2f)
                $("#deseje5").val(des2f.toFixed(2))
                $("#deseje5_").val(des2f.toFixed(2))
            } else {
                var des2f = parseFloat($("#fuerza5i").val()) - parseFloat($("#fuerza5d").val())
                des2f = ((des2f / parseFloat($("#fuerza5i").val())) * 100)
                //                                des2f = des2f.substring(0, 2)
                //                                des2f = Math.round((des2f * 100) / 100)
                //                                console.log(des2f)
                $("#deseje5").val(des2f.toFixed(2))
                $("#deseje5_").val(des2f.toFixed(2))

            }
        }


        var eficatotal = ((sumFuerza / peso) * 100)
        eficatotal = ((eficatotal * 100) / 100);
        $("#efitotal").val(eficatotal.toFixed(2));
        $("#efitotal_").val(eficatotal.toFixed(2));
        var efiaux = ((auxiliar / peso) * 100)
        //                        efiaux = efiaux.substring(0, 3);
        efiaux = ((efiaux * 100) / 100);
        $("#efiaux").val(efiaux.toFixed(2));
        $("#efiaux_").val(efiaux.toFixed(2));
    })

    // $("#btn-evento").click(function(ev) {
    //     ev.preventDefault();
    //     document.getElementById("btn-evento").disabled = true;
    //     if ($(".Vplaca").val() == null || $(".Vplaca").val() == "") {
    //         Toast.fire({
    //             icon: "error",
    //             title: "Seleccione una placa",
    //             position: "bottom-end"
    //         });
    //         document.getElementById("btn-evento").disabled = false;
    //     } else {
    //         Toast.fire({
    //             icon: "info",
    //             title: "Creando evento...",
    //             timeout: 500,
    //             position: "bottom-end"
    //         });
    //         $.ajax({
    //             url: 'getevento/',
    //             type: 'post',
    //             dataType: 'json',
    //             data: {
    //                 placa: $(".Vplaca").val(),
    //                 prueba: 'Frenos',
    //                 tipoprueba: '7',
    //                 tipovehiculo: '1',
    //                 tipoevento: '1',
    //                 _token: $("input[name='_token']").val()
    //             },
    //             success: function(data, textStatus, jqXHR) {
    //                 document.getElementById("btn-evento").disabled = false;
    //                 // document.getElementById("btn-guardar").disabled = false;
    //                 Swal.close();
    //                 Toast.fire({
    //                     icon: "success",
    //                     title: "Evento creado, tenga en cuenta el tiempo de duracion de la prueba, para enviar los datos.",
    //                     timeout: 1000,
    //                     position: "bottom-end"
    //                 });

    //                 // Luego mostrar el toast con un pequeño delay
    //                 iniciarContadorRegresivo();

    //             },
    //             error: function(jqXHR, textStatus, errorThrown) {
    //                 console.log('error')
    //                 console.log(jqXHR.responseText)
    //                 console.log(textStatus)
    //                 console.log(errorThrown)
    //             }
    //         });
    //     }

    // });

    // Configuración del tiempo (en segundos) - puedes modificar este valor
    const TIEMPO_PRUEBA = 80; // 5 minutos = 300 segundos

    // Función para iniciar el contador regresivo
    function iniciarContadorRegresivo() {
        let tiempoRestante = TIEMPO_PRUEBA;
        let intervalo;

        // Crear o actualizar el elemento del contador
        let contadorElemento = $("#contador-regresivo");
        if (contadorElemento.length === 0) {
            $("body").append(`
            <div id="contador-regresivo" style="
                position: fixed;
                top: 20px;
                right: 20px;
                background: #f8f9fa;
                border: 2px solid #007bff;
                border-radius: 10px;
                padding: 15px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                z-index: 1000;
                text-align: center;
                min-width: 150px;
            ">
                <h4 style="margin: 0 0 10px 0; color: #007bff;">Tiempo Restante</h4>
                <div id="tiempo-display" style="font-size: 24px; font-weight: bold; color: #dc3545;">
                    ${formatearTiempo(tiempoRestante)}
                </div>
                
            </div>
        `);
        }

        // Mostrar el contador
        $("#contador-regresivo").show();

        // Función para actualizar el contador
        function actualizarContador() {
            tiempoRestante--;

            // Actualizar display
            $("#tiempo-display").text(formatearTiempo(tiempoRestante));

            // Cambiar color según el tiempo
            if (tiempoRestante <= 60) {
                $("#tiempo-display").css("color", "#dc3545"); // Rojo
            } else if (tiempoRestante <= 120) {
                $("#tiempo-display").css("color", "#ffc107"); // Amarillo
            }

            // Cuando el tiempo se acaba
            if (tiempoRestante <= 0) {
                clearInterval(intervalo);
                $("#tiempo-display").text("00:00");

                // Mostrar alerta
                Toast.fire({
                    icon: "warning",
                    title: "¡Tiempo agotado! Envíe la prueba ahora.",
                    position: "bottom-end"
                });
            }
        }

        // Iniciar el intervalo
        intervalo = setInterval(actualizarContador, 1000);


    }

    // Función para formatear el tiempo (segundos a MM:SS)
    function formatearTiempo(segundos) {
        const minutos = Math.floor(segundos / 60);
        const segundosRestantes = segundos % 60;
        return `${minutos.toString().padStart(2, '0')}:${segundosRestantes.toString().padStart(2, '0')}`;
    }


    $("#btn-buscar-placa").click(function(e) {
        e.preventDefault();

        if ($(".Vplaca").val() == "" || $(".Vplaca").val() == null) {
            Swal.fire({
                icon: "info",
                title: 'Buscar placa',
                allowOutsideClick: false,
                html: '<div style= "font-size: 18px">Seleccione una placa primero<div>',
                showConfirmButton: true,
            });
        } else {
            $.ajax({
                url: 'buscarvehiculo/',
                type: 'post',
                dataType: 'json',
                data: {
                    placa: $(".Vplaca").val(),
                    idtipo_prueba: 7,
                    _token: $("input[name='_token']").val()
                },
                success: function(data, textStatus, jqXHR) {

                    if (data.length > 0) {
                        $.each(data, function(i, res) {
                            if (res.estado == 1) {
                                Toast.fire({
                                    icon: "info",
                                    title: "La prueba que se trajo esta en estado <span style='color: #dc3545; font-weight: bold;'>RECHAZADA</span>, por favor verifique bien los datos antes de enviarla nuevamente.",
                                    timeout: 100000
                                });
                            }
                            if (res.estado == 9) {
                                Toast.fire({
                                    icon: "info",
                                    title: "La prueba que se trajo esta en estado <span style='color: #dc3545; font-weight: bold;'>REASIGNADA</span>, por favor verifique bien los datos antes de enviarla nuevamente.",
                                    timeout: 100000
                                });
                            }
                            if (res.observacion.trim() == 'Frenos eje 1 izquierdo' || res
                                .observacion.trim() == 'Frenos eje 1 Izquierdo')
                                $("#fuerza1i").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 1 derecho' || res
                                .observacion.trim() == 'Frenos eje 1 Derecho')
                                $("#fuerza1d").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 2 izquierdo' || res
                                .observacion.trim() == 'Frenos eje 2 Izquierdo')
                                $("#fuerza2i").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 2 derecho' || res
                                .observacion.trim() == 'Frenos eje 2 Derecho')
                                $("#fuerza2d").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 3 izquierdo' || res
                                .observacion.trim() == 'Frenos eje 3 Izquierdo')
                                $("#fuerza3i").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 3 derecho' || res
                                .observacion.trim() == 'Frenos eje 3 Derecho')
                                $("#fuerza3d").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 4 izquierdo' || res
                                .observacion.trim() == 'Frenos eje 4 Izquierdo')
                                $("#fuerza4i").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 4 derecho' || res
                                .observacion.trim() == 'Frenos eje 4 Derecho')
                                $("#fuerza4d").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 5 izquierdo' || res
                                .observacion.trim() == 'Frenos eje 5 Izquierdo')
                                $("#fuerza5i").val(res.valor);
                            if (res.observacion.trim() == 'Frenos eje 5 derecho' || res
                                .observacion.trim() == 'Frenos eje 5 Derecho')
                                $("#fuerza5d").val(res.valor);


                            if (res.observacion == 'Pesaje eje 1 izquierdo' || res
                                .observacion == 'Pesaje eje 1 Izquierdo')
                                $("#pesaje1i").val(res.valor);
                            if (res.observacion == 'Pesaje eje 1 derecho' || res.observacion ==
                                'Pesaje eje 1 Derecho')
                                $("#pesaje1d").val(res.valor);
                            if (res.observacion == 'Pesaje eje 2 izquierdo' || res
                                .observacion == 'Pesaje eje 2 Izquierdo')
                                $("#pesaje2i").val(res.valor);
                            if (res.observacion == 'Pesaje eje 2 derecho' || res.observacion ==
                                'Pesaje eje 2 Derecho')
                                $("#pesaje2d").val(res.valor);
                            if (res.observacion == 'Pesaje eje 3 izquierdo' || res
                                .observacion == 'Pesaje eje 3 Izquierdo')
                                $("#pesaje3i").val(res.valor);
                            if (res.observacion == 'Pesaje eje 3 derecho' || res.observacion ==
                                'Pesaje eje 3 Derecho')
                                $("#pesaje3d").val(res.valor);
                            if (res.observacion == 'Pesaje eje 4 izquierdo' || res
                                .observacion == 'Pesaje eje 4 Izquierdo')
                                $("#pesaje4i").val(res.valor);
                            if (res.observacion == 'Pesaje eje 4 derecho' || res.observacion ==
                                'Pesaje eje 4 Derecho')
                                $("#pesaje4d").val(res.valor);
                            if (res.observacion == 'Pesaje eje 5 izquierdo' || res
                                .observacion == 'Pesaje eje 5 Izquierdo')
                                $("#pesaje5i").val(res.valor);
                            if (res.observacion == 'Pesaje eje 5 derecho' || res.observacion ==
                                'Pesaje eje 5 Derecho')
                                $("#pesaje5d").val(res.valor);


                            if (res.observacion.trim() == 'FrenoAuxs eje 2 izquierdo' || res
                                .observacion.trim() == 'FrenoAuxs eje 2 Izquierdo' || res
                                .observacion.trim() == 'FrenoAuxs eje 7 izquierdo')
                                $("#fuerzaauxi").val(res.valor);
                            if (res.observacion.trim() == 'FrenoAuxs eje 2 derecho' || res
                                .observacion.trim() == 'FrenoAuxs eje 2 Derecho' || res
                                .observacion.trim() == 'FrenoAuxs eje 7 derecho')
                                $("#fuerzaauxd").val(res.valor);


                        });
                    } else {
                        Toast.fire({
                            icon: "error",
                            title: "No se encontraron registros."
                        });
                    }



                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('error')
                    console.log(jqXHR.responseText)
                    console.log(textStatus)
                    console.log(errorThrown)
                }
            });
        }
    })
</script><?php /**PATH C:\Apache248\htdocs\AppData\resources\views/TipoPrueba/frenos.blade.php ENDPATH**/ ?>