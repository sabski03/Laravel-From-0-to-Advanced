@extends('layouts.master')

@section('content')

    <x-modal-component modalTitle="Modal 1" buttonColor="danger" modalColor="danger" modalType="danger" modalTextColor="light" modalSaveButtonColor="success" modalCloseButtonColor="warning">
        <x-slot name="buttonText">
            Save
        </x-slot>

        <x-slot name="modalContent">
            Content 1
        </x-slot>
    </x-modal-component>




    <x-modal-component modalTitle="Modal 2" buttonColor="success" modalColor="success" modalType="success" modalTextColor="light" modalSaveButtonColor="warning" modalCloseButtonColor="danger">
        <x-slot name="buttonText">
            Close
        </x-slot>

        <x-slot name="modalContent">
            Content 2
        </x-slot>
    </x-modal-component>






@endsection
