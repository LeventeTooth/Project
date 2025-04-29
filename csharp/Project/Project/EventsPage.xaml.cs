using Project.Controller;

namespace Project;

public partial class EventsPage : ContentPage
{
	public EventsPage()
	{
		InitializeComponent();

		BindingContext = new EventsController();
	}
}