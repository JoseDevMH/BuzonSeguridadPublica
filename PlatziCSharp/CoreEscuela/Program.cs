using System;
using CoreEscuela;

namespace CoreEscuela {
    class Escuela {
        public string nombre;
        public string direccion;
        public int agnoFundacion;

        public void Timbrar () {
            Console.Beep(1000,300);
        }

    }
    class Program {
        static void Main (string[] args) {
            Console.WriteLine ("Hello World!");
            var miEscuela = new Escuela();
            miEscuela.nombre = "Alvaro Obregon.";
            miEscuela.direccion = "San Jose de la Montaña";
            miEscuela.agnoFundacion = 1975;
            miEscuela.Timbrar();

            //Console.WriteLine();
        }
    }
}