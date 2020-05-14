using System.Dynamic;
namespace CoreEscuela.Entidades
{
    class Escuela
    {
        string nombre;

        public string Nombre //Se usa este formato si se va  a meter logica a los valores
        {
            get {return "Nombre de la Escuela: " + nombre;}
            set {nombre = value.ToUpper();}
        }

        public int AñoDeCreacion {get; set;} //se usa esta forma si no vamos a meter logica al valor
        public string Ciudad { get; set; }
        public string Pais { get; set; }
        public TiposEscuela TipoEscuela { get; set; }

        /*public Escuela(string nombre, int año) //Metodo Constructor 
        {
            this.nombre = nombre;
            añoDeCreacion = año;
        }*/

        //Metodo Constructor Asignacion por tuplas
        public Escuela(string nombre, int año) => (Nombre, AñoDeCreacion) = (nombre,año); 

        public override string ToString()
        {
            return $"Nombre: {Nombre}, Tipo: {TipoEscuela} \nPais: {Pais}, Ciudad: {Ciudad}, Año de Fundación: {AñoDeCreacion}";
        }
    }
}