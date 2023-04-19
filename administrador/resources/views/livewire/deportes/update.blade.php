<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Actividad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="nombre_actividad"></label>
                <input wire:model="nombre_actividad" type="text" class="form-control" id="nombre_actividad" placeholder="Nombre Actividad">@error('nombre_actividad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="edad"></label>
                <input wire:model="edad" type="text" class="form-control" id="edad" placeholder="Edad">@error('edad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="lugar"></label>
                <input wire:model="lugar" type="text" class="form-control" id="lugar" placeholder="Lugar">@error('lugar') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="dias"></label>
                <input wire:model="dias" type="text" class="form-control" id="dias" placeholder="Dias">@error('dias') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="grupo1"></label>
                <input wire:model="grupo1" type="text" class="form-control" id="grupo1" placeholder="Grupo1">@error('grupo1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="grupo2"></label>
                <input wire:model="grupo2" type="text" class="form-control" id="grupo2" placeholder="Grupo2">@error('grupo2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="grupo3"></label>
                <input wire:model="grupo3" type="text" class="form-control" id="grupo3" placeholder="Grupo3">@error('grupo3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="grupo4"></label>
                <input wire:model="grupo4" type="text" class="form-control" id="grupo4" placeholder="Grupo4">@error('grupo4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="grupo5"></label>
                <input wire:model="grupo5" type="text" class="form-control" id="grupo5" placeholder="Grupo5">@error('grupo5') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="horario_grupo1"></label>
                <input wire:model="horario_grupo1" type="text" class="form-control" id="horario_grupo1" placeholder="Horario Grupo1">@error('horario_grupo1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="horario_grupo2"></label>
                <input wire:model="horario_grupo2" type="text" class="form-control" id="horario_grupo2" placeholder="Horario Grupo2">@error('horario_grupo2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="horario_grupo3"></label>
                <input wire:model="horario_grupo3" type="text" class="form-control" id="horario_grupo3" placeholder="Horario Grupo3">@error('horario_grupo3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="horario_grupo4"></label>
                <input wire:model="horario_grupo4" type="text" class="form-control" id="horario_grupo4" placeholder="Horario Grupo4">@error('horario_grupo4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="horario_grupo5"></label>
                <input wire:model="horario_grupo5" type="text" class="form-control" id="horario_grupo5" placeholder="Horario Grupo5">@error('horario_grupo5') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nombre_profesor"></label>
                <input wire:model="nombre_profesor" type="text" class="form-control" id="nombre_profesor" placeholder="Nombre Profesor">@error('nombre_profesor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="costo_clase"></label>
                <input wire:model="costo_clase" type="text" class="form-control" id="costo_clase" placeholder="Costo Clase">@error('costo_clase') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="costo_mensual_paquete1"></label>
                <input wire:model="costo_mensual_paquete1" type="text" class="form-control" id="costo_mensual_paquete1" placeholder="Costo Mensual Paquete1">@error('costo_mensual_paquete1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="costo_mensual_paquete2"></label>
                <input wire:model="costo_mensual_paquete2" type="text" class="form-control" id="costo_mensual_paquete2" placeholder="Costo Mensual Paquete2">@error('costo_mensual_paquete2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="costo_mensual_paquete3"></label>
                <input wire:model="costo_mensual_paquete3" type="text" class="form-control" id="costo_mensual_paquete3" placeholder="Costo Mensual Paquete3">@error('costo_mensual_paquete3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="costo_mensual_paquete4"></label>
                <input wire:model="costo_mensual_paquete4" type="text" class="form-control" id="costo_mensual_paquete4" placeholder="Costo Mensual Paquete4">@error('costo_mensual_paquete4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
