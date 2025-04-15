using Project.Controller;

namespace Project
{
    public partial class MainPage : ContentPage
    {


        public MainPage()
        {
            InitializeComponent();
            BindingContext = new MainController();
        }

      
    }

}
