@extends('layouts.App')

@section('content')
<div class="container-fluid main-container">
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Description</th>
                <th>Registration Fee</th>
                <th>Status</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rock Concert</td>
                <td>2024-11-01</td>
                <td>19:00</td>
                <td>Madison Square Garden, NY</td>
                <td>A night of electrifying performances by top rock bands.</td>
                <td>$75</td>
                <td>Upcoming</td>
                <td>contact@rockconcert.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Jazz Night</td>
                <td>2024-11-05</td>
                <td>20:00</td>
                <td>Blue Note, NY</td>
                <td>An intimate evening with renowned jazz musicians.</td>
                <td>$50</td>
                <td>Upcoming</td>
                <td>info@bluenote.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Classical Symphony</td>
                <td>2024-11-10</td>
                <td>15:00</td>
                <td>Carnegie Hall, NY</td>
                <td>A breathtaking performance by the New York Symphony Orchestra.</td>
                <td>$100</td>
                <td>Upcoming</td>
                <td>info@carnegiehall.org</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Pop Festival</td>
                <td>2024-11-15</td>
                <td>18:00</td>
                <td>Central Park, NY</td>
                <td>A day filled with performances by top pop artists.</td>
                <td>$120</td>
                <td>Upcoming</td>
                <td>support@popfestival.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Country Music Gala</td>
                <td>2024-11-20</td>
                <td>17:00</td>
                <td>Grand Ole Opry, Nashville</td>
                <td>Enjoy performances by country music's biggest stars.</td>
                <td>$80</td>
                <td>Upcoming</td>
                <td>info@countrymusicgala.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Indie Music Showcase</td>
                <td>2025-12-16</td>
                <td>17:00</td>
                <td>Grand Ole Opry, Nashville</td>
                <td>A celebration of emerging indie artists.</td>
                <td>$50</td>
                <td>Upcoming</td>
                <td>indie@musicshowcase.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Gospel Night</td>
                <td>2025-01-10</td>
                <td>19:30</td>
                <td>St. Paul's Cathedral, NY</td>
                <td>An uplifting evening of gospel music.</td>
                <td>$30</td>
                <td>Upcoming</td>
                <td>info@gospelnight.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>EDM Festival</td>
                <td>2025-02-05</td>
                <td>20:00</td>
                <td>Las Vegas Strip, NV</td>
                <td>A massive festival featuring top electronic artists.</td>
                <td>$150</td>
                <td>Upcoming</td>
                <td>support@edmfestival.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Reggae Fest</td>
                <td>2025-03-12</td>
                <td>17:00</td>
                <td>Miami Beach, FL</td>
                <td>Enjoy the vibes with reggae music and culture.</td>
                <td>$60</td>
                <td>Upcoming</td>
                <td>info@reggaefest.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Folk Music Gathering</td>
                <td>2025-04-20</td>
                <td>14:00</td>
                <td>Golden Gate Park, CA</td>
                <td>A day of folk music and storytelling.</td>
                <td>$40</td>
                <td>Upcoming</td>
                <td>info@folkgathering.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Opera Night</td>
                <td>2025-05-30</td>
                <td>19:00</td>
                <td>Metropolitan Opera House, NY</td>
                <td>A night of classic opera performances.</td>
                <td>$120</td>
                <td>Upcoming</td>
                <td>info@metopera.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Bluegrass Festival</td>
                <td>2025-06-15</td>
                <td>16:00</td>
                <td>Appalachian Mountains, TN</td>
                <td>A celebration of bluegrass music and culture.</td>
                <td>$70</td>
                <td>Upcoming</td>
                <td>info@bluegrassfestival.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Musical Theater Night</td>
                <td>2025-07-22</td>
                <td>19:30</td>
                <td>Broadway, NY</td>
                <td>A night of spectacular musical performances.</td>
                <td>$90</td>
                <td>Upcoming</td>
                <td>info@broadway.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Alternative Rock Fest</td>
                <td>2025-08-10</td>
                <td>18:00</td>
                <td>City Park, Chicago</td>
                <td>Showcasing the best of alternative rock.</td>
                <td>$85</td>
                <td>Upcoming</td>
                <td>contact@rockfest.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
            <tr>
                <td>Hip-Hop Showcase</td>
                <td>2025-09-15</td>
                <td>20:00</td>
                <td>Staples Center, LA</td>
                <td>Featuring emerging hip-hop artists.</td>
                <td>$65</td>
                <td>Upcoming</td>
                <td>info@hiphopshowcase.com</td>
                <td><button class="submit">Book Now</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
