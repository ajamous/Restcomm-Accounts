# Useful RestcommCloud Accounts Related API Calls from PHP Scripts

Create a Restcomm Cloud Sub-Account from PHP

# Restcomm Get Voice Usage for specific period

Getting Voice CDRs for specific account from restcomm cloud for specific period

Supported subresources are:

| Subresource |	Description |
|-------------|-------------|
| Daily       | Return multiple UsageRecords for each usage category, each representing usage over a daily time-interval.   |
| Monthly     | Return multiple UsageRecords for each usage category, each representing usage over a monthly time-interval. |
| Yearly      | Return multple UsageRecords for each usage category, each representing usage over a yearly time-interval.   |
| AllTime     | Return a single UsageRecord for each usage category, each representing usage over the date-range specified. This is the same as the root /Usage/Records. |
| Today       | Return a single UsageRecord per usage category, for today’s usage only.                                     |
| Yesterday   | Return a single UsageRecord per usage category, for yesterday’s usage only.                                 |
| ThisMonth   | Return a single UsageRecord per usage category, for this month’s usage only.                                |
| LastMonth   | Return a single UsageRecord per usage category, for last month’s usage only.                                |

# Restcomm Get All Accounts

Listing all sub-accounts that belong to top-level account

