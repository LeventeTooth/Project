using Project.Controller;

namespace Project;

public partial class TracksPage : ContentPage
{
	public TracksPage()
	{
		InitializeComponent();
		BindingContext = new TracksController();
	}
}