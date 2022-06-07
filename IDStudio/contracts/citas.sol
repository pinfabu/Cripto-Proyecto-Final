pragma solidity ^0.5.0;

contract Citas
{
    uint public id=0;

    struct Appointment
    {
        string contenido;
    }
    mapping(uint => Appointment) public agenda;

    function crearCita(string memory contenido) public
    {
        id ++;
        agenda[id]= Appointment(contenido);
    }
}