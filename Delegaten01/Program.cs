namespace Delegaten01
{
    delegate void DelegateHandler();
    delegate string Delegate2Handler();
    delegate Basis BasisHandler();
    delegate void Delegate3Handler(Child1 c);
    internal class Program
    {
        static void Main(string[] args)
        {
            Basis[] b = { new Child1(), new Child2() };
            TuWas(b);

            BasisHandler bh = KovarianzMethode;
            Delegate3Handler d3 = KontravarianzMethode;
            d3(new Child1());
        }

        static void TuWas(Basis[] barr) {}

        static void KontravarianzMethode(Basis b){}

        static Child1 KovarianzMethode()
        {
            return default(Child1);
        }
    }
}