pragma solidity ^0.5.0;

contract Agenda
{
    uint public id=0;

    struct Appointment
    {
        string contenido;
    }
    mapping(uint => Appointment) public citas;

    function crearCita(string memory contenido) public
    {
        id ++;
        citas[id]= Appointment(contenido);
    }
}