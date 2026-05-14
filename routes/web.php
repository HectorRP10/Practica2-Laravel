<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HistorialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paciente/{id}/citas', [PacienteController::class, 'obtenerCitas']);
Route::get('/paciente/{id}/historial', [PacienteController::class, 'obtenerHistorial']);
Route::get('/medico/{id}/citas', [MedicoController::class, 'obtenerCitas']);
Route::get('/cita/{id}/medico', [CitaController::class, 'obtenerMedico']);
Route::get('/cita/{id}/paciente', [CitaController::class, 'obtenerPaciente']);
Route::get('/historial/{id}/paciente', [HistorialController::class, 'obtenerPaciente']);