using System;
using CoreEscuela.Entidades;

namespace Etapa1
{
    class Program
    {
        static void Main(string[] args)
        {
            var escuela = new Escuela("Platzi", 2000);
            escuela.Ciudad = "Gto";
            escuela.Pais = "MX";
            escuela.TipoEscuela = TiposEscuela.Primaria;
            Console.WriteLine(escuela);
        }
    }
}
